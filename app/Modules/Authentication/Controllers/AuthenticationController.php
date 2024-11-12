<?php

namespace App\Modules\Authentication\Controllers;

use App\Controllers\BaseController;
use App\Modules\Authentication\Models\ActivationTokensModel;
use App\Modules\Authentication\Models\PasswordResetTokensModel;
use App\Modules\Authentication\Models\UserModel;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;
use ReflectionException;


class AuthenticationController extends BaseController
{
    /**
     * Handles the sign-up process for users
     *
     */
    public function sign_up()
    {
        $data = [];

        $session = session();
        if ($session->has('isLoggedIn') && $session->get('isLoggedIn') === true) {
            return redirect()->to(base_url('admindashboard'));
        }

        if ($this->request->getMethod() == 'post') {
            $userModel = new UserModel();
            $tokenModel = new ActivationTokensModel();

            $rules = [
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]',
            ];

            if (!$this->validate($rules)) {
                $data['error'] = $this->validator->listErrors();
            } else {
                $existingUser = $userModel->where('primary_email_address', $this->request->getPost('email'))->first();

                if ($existingUser) {
                    $data['error'] = 'The email address is already taken.';
                } else {

                    $userData = [
                        'first_name' => $this->request->getPost('firstName'),
                        'last_name' => $this->request->getPost('lastName'),
                        'primary_email_address' => $this->request->getPost('email'),
                        'user_role_id' => 2,
                        'newsletter' => $this->request->getPost('newsletter') ? 1 : 0,
                        'password' => password_hash((string)$this->request->getPost('password'), PASSWORD_DEFAULT),
                    ];

                    $token = bin2hex(random_bytes(8));
                    $tokenData = [
                        'token' => $token,
                        'email' => $this->request->getPost('email'),
                    ];

                    $email = \Config\Services::email();
                    $email->setFrom('testlla924@gmail.com', 'Admin LLA');
                    $email->setTo($this->request->getPost('email'));
                    $email->setSubject('Account Activation');

                    $message = view('App\Modules\Authentication\Views\activation_email', ['token' => $token]);
                    $email->setMessage($message);

                    $email->setMessage($message, 'text/html');

                    if ($email->send()) {
                        if ($userModel->insert($userData) && $tokenModel->insert($tokenData)) {
                            $session->setFlashdata('success', 'An email has been sent to your email address. Please check your email to activate your account.');
                            header('Refresh: 8; URL=' . base_url('authentication/sign_in'));
                            return view('App\Modules\Authentication\Views\sign_up', $data);
                        } else {

                            $data['error'] = 'User registration failed. Please try again.';
                        }
                    } else {

                        $data['error'] = 'Email sending failed. Please try again.';
                    }
                }
            }
        }
        return view('App\Modules\Authentication\Views\sign_up', $data);
    }

    /**
     * Activates a user account using the provided token.
     * @param string $token The activation token.
     * @return RedirectResponse
     * @throws ReflectionException
     */
    public function activate_account($token): RedirectResponse
    {

        $tokenModel = new ActivationTokensModel();
        $userModel = new UserModel();

        $tokenData = $tokenModel->where('token', $token)->first();

        if ($tokenData) {
            $email = $tokenData['email'];

            $user = $userModel->where('primary_email_address', $email)
                ->where('status', 'inactive')
                ->first();

            if ($user) {
                $userData = ['status' => 'active'];
                $userModel->update($user['id'], $userData);

                $tokenModel->delete($tokenData['id']);

                $email = \Config\Services::email();

                $email->setFrom('testlla924@gmail.com', 'Admin LLA');
                $email->setTo($tokenData['email']);

                $email->setSubject('Welcome to LLA');
                $email->setMessage('Your account has been activated successfully. You can now sign in.');

                $email->send();

                return redirect()->to(base_url('authentication/sign_in'))->with('success', 'Your account has been activated successfully. You can now sign in.');
            } else {

                return redirect()->to(base_url('authentication/sign_in'))->with('error', 'Invalid activation link.');
            }
        } else {
            return redirect()->to(base_url('authentication/sign_in'))->with('error', 'Invalid activation link.');
        }
    }

    /**
     * Handles the sign-in process for users
     */
    public function sign_in()
    {

        $data = [];

        $session = session();
        if ($session->has('isLoggedIn') && $session->get('isLoggedIn') === true) {
            return redirect()->to(base_url('admindashboard'));
        }
        if ($this->request->getMethod() == 'post') {
            $userModel = new UserModel();

            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required',
            ];

            if (!$this->validate($rules)) {
                $data['error'] = $this->validator->listErrors();
            } else {
                $user = $userModel->where('primary_email_address', $this->request->getPost('email'))->first();
                if ($user) {
                    if (password_verify((string)$this->request->getPost('password'), $user['password'])) {
                        if ($user['status'] == 'active') {
                            $session = session();
                            $sessionData = [
                                'id' => $user['id'],
                                'isLocked' => false,
                                'isLoggedIn' => true,
                            ];
                            $session->set($sessionData);

                            return redirect()->to(base_url('authentication/sign_in'))->with('success', 'Login successful!');
                        } else {
                            $data['error'] = 'Your account has not yet been activated. Check your email for activation instructions.';
                        }
                    } else {
                        $data['error'] = 'Invalid email or password.';
                    }
                } else {
                    $data['error'] = 'Invalid email or password.';
                }
            }
        }

        return view('App\Modules\Authentication\Views\sign_in', $data);
    }

    /**
     * Signs the user out by destroying the session.
     * @return RedirectResponse
     */
    public function sign_out(): RedirectResponse
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('authentication/sign_in'));
    }

    /**
     * Handles locking/unlocking the user screen.
     */
    public function lock_screen()
    {
        $data = [];
        $session = session();
        $userModel = new UserModel();

        if ($this->request->getMethod() == 'post') {

            if ($this->request->getPost('action') == 'unlock' && $session->get('isLoggedIn') === true) {
                $user = $userModel->find($session->get('id'));
                if ($user && password_verify((string)$this->request->getPost('password'), $user['password'])) {
                    $session->set('isLocked', false);
                    return redirect()->to(base_url('admindashboard'));
                } else {
                    $data['error'] = 'Invalid password.';
                }
            } elseif ($this->request->getPost('action') == 'lock' && $session->get('isLoggedIn') === true) {
                $session->set('isLocked', true);
                $data['userInfo'] = [
                    'id' => $session->get('id'),
                    'first_name' => $session->get('first_name'),
                    'last_name' => $session->get('last_name'),
                    'email' => $session->get('email'),
                ];
            }
        } elseif (!$session->get('isLoggedIn')) {
            return redirect()->to(base_url('authentication/sign_in'));
        }

        return view('App\Modules\Authentication\Views\lock_screen', $data);
    }

    /**
     * Locks the user account due to inactivity.
     * @return ResponseInterface
     */
    public function autoLock(): ResponseInterface
    {
        $session = session();
        $session->set('isLocked', true);
        return $this->response->setJSON(['status' => 'success', 'message' => 'Account has been locked due to inactivity']);
    }

    /**
     * Sends a reset password link to the user's email.
     */
    public function send_password_reset(): string
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $userModel = new UserModel();
            $resetTokenModel = new PasswordResetTokensModel();

            $user = $userModel->where('primary_email_address', $this->request->getPost('email'))->first();

            if ($user) {
                $data['error'] = 'Invalid email address.';
            }
            $token = bin2hex(random_bytes(8));
            $resetTokenData = [
                'reset_token' => $token,
                'user_id' => $user['id'],
                'expiry_time' => date('Y-m-d H:i:s', strtotime('+1 hour')),
            ];

            $email = \Config\Services::email();
            $email->setFrom('testlla924@gmail.com', 'Admin LLA');
            $email->setTo($this->request->getPost('email'));
            $email->setSubject('Password Reset');

            $message = view('App\Modules\Authentication\Views\change_password', ['token' => $token]);
            $email->setMessage($message);

            $email->setMessage($message, 'text/html');

            if ($email->send()) {
                if (!$resetTokenModel->insert($resetTokenData)) {
                    $data['error'] = 'Failed to store reset token. Please try again.';
                }
            } else {
                $data['error'] = 'Email sending failed. Please try again.';
            }
        }
        return View('App\Modules\Authentication\Views\password_reset_link', $data);
    }

    /**
     * @return ResponseInterface
     */
    public function sendResetPasswordLink(): ResponseInterface
    {

        $reset_email = $this->request->getPost('email');

        $userModel = new UserModel();
        $resetTokenModel = new PasswordResetTokensModel();

        $user = $userModel->where('primary_email_address', $reset_email)->first();

        if (!$user) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid email address.']);
        }
        $token = bin2hex(random_bytes(8));
        $resetTokenData = [
            'reset_token' => $token,
            'user_id' => $user['id'],
            'expiry_time' => date('Y-m-d H:i:s', strtotime('+1 hour')),
        ];

        $email = \Config\Services::email();
        $email->setFrom('testlla924@gmail.com', 'Admin LLA');
        $email->setTo($reset_email);
        $email->setSubject('Password Reset');

        $message = view('App\Modules\Authentication\Views\change_password', ['token' => $token]);
        $email->setMessage($message);

        $email->setMessage($message, 'text/html');

        if (!$email->send()) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Email sending failed. Please try again.']);
        }
        if (!$resetTokenModel->insert($resetTokenData)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to store reset token. Please try again.']);
        }
        return $this->response->setJSON(['status' => 'success', 'message' => 'Email sent! Please check your email for further instructions.']);
    }

    /**
     * Resets the user's password using the provided token.
     * @param string $token
     * @return RedirectResponse|string
     * @throws ReflectionException
     */
    public function resetPassword(string $token)
    {
        $data = [];
        $resetTokenModel = model('App\Modules\Authentication\Models\PasswordResetTokensModel');
        $userModel = model('App\Modules\Authentication\Models\UserModel');

        $resetTokenData = $resetTokenModel->where('reset_token', $token)->first();

        if ($resetTokenData) {
            if ($resetTokenData['expiry_time'] > date('Y-m-d H:i:s')) {
                if ($this->request->getMethod() == 'post') {
                    $user = $userModel->find($resetTokenData['user_id']);
                    if (!$user) {
                        $data['error'] = 'Invalid user.';
                    }
                    $userData = [
                        'password' => password_hash((string)$this->request->getPost('new_password'), PASSWORD_DEFAULT),
                    ];
                    if ($userModel->update($resetTokenData['user_id'], $userData)) {
                        $resetTokenModel->delete($resetTokenData['id']);
                        return redirect()->to(base_url('authentication/sign_in'));
                    } else {
                        $data['error'] = 'Password reset failed. Please try again.';
                    }
                }
            } else {
                $data['error'] = 'The reset link has expired. Please try again.';
            }
        } else {
            $data['error'] = 'Invalid reset link.';
        }
        return view('App\Modules\Authentication\Views\reset_password', $data);
    }
}
