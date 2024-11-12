<?php

namespace App\Modules\AdminDashboard\Controllers;

use App\Controllers\BaseController;
use App\Modules\AdminDashboard\Models\CountiesModel;
use App\Modules\AdminDashboard\Models\CountriesModel;
use App\Modules\AdminDashboard\Models\CourseCorrectPackagesModel;
use App\Modules\AdminDashboard\Models\EmergencyContactModel;
use App\Modules\AdminDashboard\Models\GenderModel;
use App\Modules\AdminDashboard\Models\InsuranceDetailsModel;
use App\Modules\AdminDashboard\Models\ModulesModel;
use App\Modules\AdminDashboard\Models\NewsLetterSubscribersModel;
use App\Modules\AdminDashboard\Models\SubCountiesModel;
use App\Modules\AdminDashboard\Models\SubTopicsModel;
use App\Modules\AdminDashboard\Models\TopicsModel;
use App\Modules\Authentication\Models\UserModel;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

class AdminDashboardController extends BaseController
{
    /**
     * Display the dashboard.
     */
    public function index()
    {
        $sessionData = $this->getSessionData();
        $userModel = new UserModel();
        if ($sessionData['isLoggedIn'] && $sessionData['isLocked']) {
            return redirect()->to(base_url('authentication/lock_screen'));
        } elseif (!$sessionData['isLoggedIn']) {
            return redirect()->to(base_url('authentication/sign_in'));
        }

        $user = $userModel->find($sessionData['userInfo']['id']);

        $data = array_merge($sessionData, ['user' => $user]);

        return view("App\Modules\AdminDashboard\Views\header", $data) .
            view("App\Modules\AdminDashboard\Views\sidebar", $data) .
            view("App\Modules\AdminDashboard\Views\Topbar", $data) .
            view("App\Modules\AdminDashboard\Views\dashboard", $data) .
            view("App\Modules\AdminDashboard\Views\Footer", $data);
    }

    /**
     * Get session data.
     * @return array
     */
    public function getSessionData(): array
    {
        $session = session();
        if ($session->has('isLoggedIn') && $session->get('isLoggedIn') === true) {
            if ($session->has('isLocked') && $session->get('isLocked') === true) {
                return ['isLoggedIn' => true, 'isLocked' => true];
            }

            return [
                'isLoggedIn' => true,
                'isLocked' => false,
                'userInfo' => [
                    'id' => $session->get('id'),
                ],
            ];
        }
        return ['isLoggedIn' => false, 'isLocked' => false,];
    }

    // /**
    //  * Fetch packages
    //  * @return array
    //  */
    // public function fetch_packages(): array
    // {
    //     $packagesModel = new CourseCorrectPackagesModel();
    //     $packages = $packagesModel->findAll();
    //     return ['packages' => $packages];
    // }

    // /**
    //  * Fetch topics and subtopics
    //  * @return ResponseInterface
    //  */
    // public function fetch_topics_and_subtopics(): ResponseInterface
    // {
    //     $moduleId = $this->request->getPost('module_id');
    //     $topicsModel = new TopicsModel();
    //     $subTopicsModel = new SubTopicsModel();
    //     $moduleTopics = $topicsModel->where('module_id', $moduleId)->findAll();
    //     foreach ($moduleTopics as &$topic) {
    //         $topic['sub_topics'] = $subTopicsModel->where('topic_id', $topic['id'])->findAll();
    //     }
    //     return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON(['module_topics' => $moduleTopics]);
    // }

    // /**
    //  * Fetch modules
    //  * @return ResponseInterface
    //  */
    // public function fetch_modules(): ResponseInterface
    // {
    //     $packageId = $this->request->getPost('package_id');
    //     $modulesModel = new ModulesModel();
    //     $modules = $modulesModel->where('coursecorrect_package_id', $packageId)->findAll();
    //     return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON(['modules' => $modules]);
    // }

    /**
     * Display the user profile.
     * @throws Exception
     */
    public function user_profile()
    {
        $sessionData = $this->getSessionData();

        $countriesModel = new CountriesModel();
        $countiesModel = new CountiesModel();
        $subCountiesModel = new SubCountiesModel();
        $userModel = new UserModel();
        $insuranceDetailsModel = new InsuranceDetailsModel();
        $emergencyContactModel = new EmergencyContactModel();

        if ($sessionData['isLoggedIn'] && $sessionData['isLocked']) {
            return redirect()->to(base_url('authentication/lock_screen'));
        } elseif (!$sessionData['isLoggedIn']) {
            return redirect()->to(base_url('authentication/sign_in'));
        }

        $errors = [];


        if ($this->request->getMethod() == 'post') {
            $action = $this->request->getPost('action');

            switch ($action) {
                case 'update_profile_pic':
                    $result = $this->updateProfilePicture();
                    if ($result !== true) {
                        $errors[] = $result;
                        return $this->response->setJSON(['status' => 'error', 'message' => $errors]);
                    }
                    return $this->response->setJSON(['status' => 'success', 'message' => 'Picture updated successfully.']);
                case 'delete_profile_pic':
                    $result = $this->deleteProfilePicture();
                    if ($result !== true) {
                        $errors[] = $result;
                    }
                    break;
                case 'update_profile_details':
                    $result = $this->updateProfileDetails();
                    if ($result !== true) {
                        $errors[] = $result;
                        return $this->response->setJSON(['status' => 'error', 'message' => $errors]);
                    }
                    return $this->response->setJSON(['status' => 'success', 'message' => 'Profile details updated successfully.']);
                case 'update_emergency_contact':
                    $result = $this->updateEmergencyContact();
                    if ($result !== true) {
                        $errors[] = $result;
                        return $this->response->setJSON(['status' => 'error', 'message' => $errors]);
                    }
                    return $this->response->setJSON(['status' => 'success', 'message' => 'Emergency contact details updated submitted successfully.']);
                case 'update_insurance_details':
                    $result = $this->updateInsuranceDetails();
                    if ($result !== true) {
                        $errors[] = $result;
                        return $this->response->setJSON(['status' => 'error', 'message' => $errors]);
                    }
                    return $this->response->setJSON(['status' => 'success', 'message' => 'Insurance details updated successfully.']);
                case 'submit_all_forms':
                    $personalResult = $this->updateProfileDetails();
                    if ($personalResult !== true) {
                        $errors[] = $personalResult;
                        return $this->response->setJSON(['status' => 'error', 'message' => $errors]);
                    }
                    $emergencyResult = $this->updateEmergencyContact();
                    if ($emergencyResult !== true) {
                        $errors[] = $emergencyResult;
                        return $this->response->setJSON(['status' => 'error', 'message' => $errors]);
                    }
                    $insuranceResult = $this->updateInsuranceDetails();
                    if ($insuranceResult !== true) {
                        $errors[] = $insuranceResult;
                        return $this->response->setJSON(['status' => 'error', 'message' => $errors]);
                    }
                    return $this->response->setJSON(['status' => 'success', 'message' => 'Forms submitted successfully.']);
                default:
                    break;
            }
        }

        $user = $userModel->find($sessionData['userInfo']['id']);

        $additionalData = [
            'countries' => $countriesModel->findAll(),
            'counties' => $countiesModel->findAll(),
            'sub_counties' => $subCountiesModel->findAll(),
            'insurance_details' => $insuranceDetailsModel->where('user_id', $sessionData['userInfo']['id'])->first(),
            'emergency_contact_details' => $emergencyContactModel->where('user_id', $sessionData['userInfo']['id'])->first(),
        ];

        $data = array_merge($sessionData, ['user' => $user], $additionalData);

        $data['errors'] = $errors;

        $nullPercentage = $this->getPercentage();

        $data['nullPercentage'] = $nullPercentage;

        return view("App\Modules\AdminDashboard\Views\header", $data) .
            view("App\Modules\AdminDashboard\Views\sidebar", $data) .
            view("App\Modules\AdminDashboard\Views\Topbar", $data) .
            view("App\Modules\AdminDashboard\Views\user_profile", $data) .
            view("App\Modules\AdminDashboard\Views\Footer", $data);
    }

    /**
     * Update profile picture
     * @return string|true
     */
    private function updateProfilePicture()
    {
        try {
            $sessionData = $this->getSessionData();
            $userModel = new UserModel();

            if (!$this->request->getFile('profile_picture')->isValid()) {
                throw new Exception('Invalid file.');
            }
            $file = $this->request->getFile('profile_picture');

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $imageData = file_get_contents($file->getTempName());
                $userId = $sessionData['userInfo']['id'];
                $userData = [
                    'profile_photo' => $imageData,
                ];

                $updateResult = $userModel->update($userId, $userData);

                if ($updateResult) {
                    return true;
                } else {
                    throw new Exception('Error while updating profile picture.');
                }
            }
            throw new Exception('Unknown error occurred.');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Delete profile picture
     * @return string|true
     * @throws Exception
     */
    private function deleteProfilePicture()
    {
        try {
            $sessionData = $this->getSessionData();
            $userModel = new UserModel();


            $userId = $sessionData['userInfo']['id'];

            $userData = [
                'profile_photo' => null,
            ];
            $updateResult = $userModel->update($userId, $userData);

            if ($updateResult) {
                return true;
            }
            throw new Exception('Error while deleting profile picture.');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Update profile details
     * @return string|true
     * @throws Exception
     */
    private function updateProfileDetails()
    {
        try {
            $rules = [
                'first_name' => 'required|trim',
                'middle_name' => 'required|trim',
                'last_name' => 'required|trim',
                'primary_email_address' => 'required|trim',
                'secondary_email_address' => 'required|trim',
                'primary_phone_number' => 'required|trim',
                'secondary_phone_number' => 'required|trim',
                'country_of_residence_id' => 'required|trim',
                'county_of_residence_id' => 'required|trim',
                'sub_county_of_residence_id' => 'required|trim'
            ];

            if (!$this->validate($rules)) {
                throw new Exception('Please fill in all fields in the Emergency Contact form.');
            }

            $sessionData = $this->getSessionData();
            $userId = $sessionData['userInfo']['id'];
            $userModel = new UserModel();

            $newEmailAddress = $this->request->getPost('primary_email_address');

            $existingUser = $userModel->where('primary_email_address', $newEmailAddress)
                ->where('id !=', $userId)
                ->first();

            if ($existingUser) {
                throw new Exception('Please use a different email address.');
            }

            $userData = [
                'first_name' => $this->request->getPost('first_name'),
                'middle_name' => $this->request->getPost('middle_name'),
                'last_name' => $this->request->getPost('last_name'),
                'primary_email_address' => $newEmailAddress,
                'secondary_email_address' => $this->request->getPost('secondary_email_address'),
                'dob' => $this->request->getPost('dob'),
                'national_id_passport' => $this->request->getPost('national_id_passport'),
                'primary_phone_number' => $this->request->getPost('primary_phone_number'),
                'secondary_phone_number' => $this->request->getPost('secondary_phone_number'),
                'country_of_residence_id' => $this->request->getPost('country_of_residence_id'),
                'county_of_residence_id' => $this->request->getPost('county_of_residence_id'),
                'sub_county_of_residence_id' => $this->request->getPost('sub_county_of_residence_id'),
            ];

            $updateResult = $userModel->update($userId, $userData);

            if ($updateResult) {
                return true;
            }
            throw new Exception('Error while updating user details.');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Update emergency contact details
     * @return string|true
     * @throws Exception
     */
    public function updateEmergencyContact()
    {
        try {
            $sessionData = $this->getSessionData();
            $userId = $sessionData['userInfo']['id'];

            $emergencyContactModel = new EmergencyContactModel();

            $rules = [
                'emergency_contact_first_name' => 'trim|required',
                'emergency_contact_middle_name' => 'trim',
                'emergency_contact_last_name' => 'trim|required',
                'emergency_contact_phone_number' => 'trim|required',
                'emergency_contact_email' => 'trim|required|valid_email',
                'relationship' => 'trim|required'
            ];

            if (!$this->validate($rules)) {
                throw new Exception('Fill in all fields in the Emergency Contact form.');
            }

            $data = [
                'emergency_contact_first_name' => $this->request->getPost('emergency_contact_first_name'),
                'emergency_contact_middle_name' => $this->request->getPost('emergency_contact_middle_name'),
                'emergency_contact_last_name' => $this->request->getPost('emergency_contact_last_name'),
                'emergency_contact_phone_number' => $this->request->getPost('emergency_contact_phone_number'),
                'emergency_contact_email' => $this->request->getPost('emergency_contact_email'),
                'relationship' => $this->request->getPost('relationship'),
                'user_id' => $userId,
            ];

            $existingEmergencyContact = $emergencyContactModel->where('user_id', $userId)->first();

            if ($existingEmergencyContact) {
                $updateResult = $emergencyContactModel->update($existingEmergencyContact['id'], $data);
            } else {
                $updateResult = $emergencyContactModel->insert($data);
            }

            if ($updateResult) {
                return true;
            }
            throw new Exception('Failed to update emergency contact details.');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Update insurance details
     * @return string|true
     * @throws Exception
     */
    public function updateInsuranceDetails()
    {
        try {
            $sessionData = $this->getSessionData();
            $userId = $sessionData['userInfo']['id'];

            $insuranceDetailsModel = new InsuranceDetailsModel();

            $rules = [
                'insurance_name' => 'trim|required',
                'insurance_details' => 'trim|required',
            ];

            if (!$this->validate($rules)) {
                throw new Exception('Fill in all fields in the Insurance Details form.');
            }

            $data = [
                'insurance_name' => $this->request->getPost('insurance_name'),
                'insurance_details' => $this->request->getPost('insurance_details'),
                'user_id' => $userId,
            ];

            $existingInsuranceDetails = $insuranceDetailsModel->where('user_id', $userId)->first();

            if ($existingInsuranceDetails) {
                $updateResult = $insuranceDetailsModel->update($existingInsuranceDetails['id'], $data);
            } else {
                $updateResult = $insuranceDetailsModel->insert($data);
            }

            if ($updateResult) {
                return true;
            }
            throw new Exception('Failed to update insurance details.');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Calculate the percentage of null fields in the all listed tables.
     * @return float
     */
    function getPercentage(): float
    {
        $totalUserFields = 18;
        $totalEmergencyFields = 8;
        $totalInsuranceFields = 4;

        $userModel = new UserModel();
        $emergencyModel = new EmergencyContactModel();
        $insuranceModel = new InsuranceDetailsModel();

        $userNotNullFields = $this->calculateNotNullFields($userModel);
        $emergencyNotNullFields = $this->calculateNotNullFields($emergencyModel);
        $insuranceNotNullFields = $this->calculateNotNullFields($insuranceModel);

        $totalNotNullFields = $userNotNullFields + $emergencyNotNullFields + $insuranceNotNullFields;

        $totalFields = $totalUserFields + $totalEmergencyFields + $totalInsuranceFields;

        $nullPercentage = ($totalNotNullFields / $totalFields) * 100;
        return round($nullPercentage);
    }

    /**
     * Calculate the number of not null fields in any table
     * @param $model
     * @return int
     */
    function calculateNotNullFields($model): int
    {
        $sessionData = $this->getSessionData();
        $userId = $sessionData['userInfo']['id'];

        $data = $model->find($userId);

        $notNullFieldCount = 0;

        if (is_array($data)) {
            foreach ($data as $field => $value) {
                if ($value !== null) {
                    $notNullFieldCount++;
                }
            }
        }


        return $notNullFieldCount;
    }

    /**
     * Fetch countries
     * @return ResponseInterface
     */
    public function fetch_countries(): ResponseInterface
    {
        $countriesModel = new CountriesModel();
        $countries = $countriesModel->orderBy('country_name')->findAll();

        $response = [
            'status' => 'success',
            'data' => $countries
        ];

        return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON($response);
    }

    /**
     * Fetch counties from the database.
     * @return ResponseInterface
     */
    public function fetch_counties(): ResponseInterface
    {
        $countiesModel = new CountiesModel();
        $counties = $countiesModel->orderBy('county_name')->findAll();

        $response = [
            'status' => 'success',
            'data' => $counties
        ];

        return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON($response);
    }

    /**
     * Fetch sub-counties from the database.
     * @return ResponseInterface
     */
    public function fetch_sub_counties(): ResponseInterface
    {
        $countyId = $this->request->getPost('county_id');
        if (!$countyId) {
            $response = [
                'status' => 'error',
                'message' => 'County ID is missing.',
            ];
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)->setJSON($response);
        }

        $subCountiesModel = new SubCountiesModel();

        $subCounties = $subCountiesModel->where('county_id', $countyId)->orderBy('sub_county_name')->findAll();

        $response = [
            'status' => 'success',
            'data' => $subCounties,
        ];

        return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON($response);
    }

    /**
     * Return percentage of null fields in the user's profile.
     * @return ResponseInterface
     */
    function calculateNullPercentage(): ResponseInterface
    {
        $nullPercentage = $this->getPercentage();
        return $this->response->setJSON(['status' => 'success', 'message' => $nullPercentage]);
    }

    /**
     * Coursecorrect settings page
     */
    public function coursecorrect_settings()
    {
        $sessionData = $this->getSessionData();
        $userModel = new UserModel();
        if ($sessionData['isLoggedIn'] && $sessionData['isLocked']) {
            return redirect()->to(base_url('authentication/lock_screen'));
        } elseif (!$sessionData['isLoggedIn']) {
            return redirect()->to(base_url('authentication/sign_in'));
        }
        $user = $userModel->find($sessionData['userInfo']['id']);

        $data = array_merge($sessionData, ['user' => $user]);
        return view("App\Modules\AdminDashboard\Views\header", $data) .
            view("App\Modules\AdminDashboard\Views\sidebar", $data) .
            view("App\Modules\AdminDashboard\Views\Topbar", $data) .
            view("App\Modules\AdminDashboard\Views\coursecorrect_settings", $data) .
            view("App\Modules\AdminDashboard\Views\Footer", $data);
    }

    /**
     * Get genders
     * @return ResponseInterface
     * @throws Exception
     */
    public function get_genders(): ResponseInterface
    {
        $genderModel = new GenderModel();
        $genders = $genderModel->findAll();

        $response = [
            'status' => 'success',
            'data' => $genders
        ];

        return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON($response);
    }

    /**
     * Update gender
     * @return ResponseInterface
     * @throws Exception
     */
    public function update_gender(): ResponseInterface
    {
        try {
            $requestData = $this->request->getJSON();
            $id = $requestData->id;
            $newGenderName = $requestData->gender;
            $newGenderDescription = $requestData->description;

            $genderModel = new GenderModel();
            $gender = $genderModel->where('id', $id)
                ->first();

            if (!$gender) {
                throw new Exception('Gender not found');
            }
            $gender['gender'] = $newGenderName;
            $gender['description'] = $newGenderDescription;

            if (!$genderModel->update($id, $gender)) {
                throw new Exception('Failed to update gender');
            }
            $response = [
                'status' => 'success',
                'data' => $gender
            ];
            return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON($response);
        } catch (Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)->setJSON($response);
        }
    }

    /**
     * Add gender
     * @return ResponseInterface
     * @throws Exception
     */
    public function add_gender(): ResponseInterface
    {
        try {
            $requestData = $this->request->getJSON();
            $newGenderName = $requestData->gender;
            $newGenderDescription = $requestData->description;


            $genderModel = new GenderModel();

            $data = [
                'gender' => $newGenderName,
                'description' => $newGenderDescription
            ];

            if (!$genderModel->insert($data)) {
                throw new Exception('Failed to add gender.');
            }
            $response = [
                'status' => 'success',
                'message' => 'Gender added successfully.'
            ];
            return $this->response->setStatusCode(ResponseInterface::HTTP_CREATED)->setJSON($response);
        } catch (Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)->setJSON($response);
        }
    }

    /**
     * Delete gender
     * @return ResponseInterface
     * @throws Exception
     */
    public function delete_gender(): ResponseInterface
    {
        try {
            $requestData = $this->request->getJSON();
            $id = $requestData->id;

            if (empty($id)) {
                throw new Exception('ID is required.');
            }

            $genderModel = new GenderModel();

            $gender = $genderModel->find($id);

            if (!$gender) {
                throw new Exception('Gender not found with the provided ID');
            }
            if (!$genderModel->delete($id)) {
                throw new Exception('Failed to delete gender');
            }
            $response = [
                'status' => 'success',
                'message' => 'Gender deleted successfully.'
            ];
            return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON($response);
        } catch (Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)->setJSON($response);
        }
    }

    /**
     *Subscribe to newsletter
     * @return ResponseInterface
     * @throws Exception
     */
    // public function subscribe_to_news_letter(): ResponseInterface
    // {
    //     try {
    //         $email = $this->request->getPost('email');

    //         if (empty($email)) {
    //             throw new Exception('Email address is required');
    //         }

    //         $userModel = new UserModel();
    //         $newsLetterSubscribersModel = new NewsLetterSubscribersModel();

    //         $user = $userModel->where('primary_email_address', $email)->first();

    //         if ($user) {
    //             if ($user['newsletter'] == 1) {
    //                 throw new Exception('You are already subscribed to the newsletter');
    //             }

    //             $userModel->update($user['id'], ['newsletter' => 1]);

    //             return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON(['status' => 'success', 'message' => 'You have subscribed to the newsletter.']);
    //         } else {
    //             $existingSubscriber = $newsLetterSubscribersModel->where('email', $email)->first();

    //             if ($existingSubscriber) {
    //                 throw new Exception('You are already subscribed to the newsletter');
    //             }
    //             $newsLetterSubscribersModel->insert(['email' => $email]);

    //             return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON(['status' => 'success', 'message' => 'You have been added to newsletter subscribers.']);
    //         }
    //     } catch (Exception $e) {
    //         return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
    //     }
    // }

    // /**
    //  * Unsubscribe to newsletter
    //  * @return ResponseInterface
    //  * @throws Exception
    //  */
    // public function unsubscribe_to_news_letter(): ResponseInterface
    // {
    //     try {
    //         $requestData = $this->request->getJSON();
    //         $email = $requestData->email;

    //         if (empty($email)) {
    //             throw new Exception('Email address is required');
    //         }

    //         $userModel = new UserModel();
    //         $newsLetterSubscribersModel = new NewsLetterSubscribersModel();

    //         $user = $userModel->where('primary_email_address', $email)->first();

    //         if ($user) {
    //             if ($user['newsletter'] == 0) {
    //                 throw new Exception('You are already unsubscribed from the newsletter');
    //             }

    //             $userModel->update($user['id'], ['newsletter' => 0]);

    //             return $this->response->setStatusCode(ResponseInterface::HTTP_OK)
    //                 ->setJSON(['status' => 'success', 'message' => 'You have unsubscribed from the newsletter.']);
    //         } else {
    //             $existingSubscriber = $newsLetterSubscribersModel->where('email', $email)->first();

    //             if (!$existingSubscriber) {
    //                 throw new Exception('You are not subscribed to the newsletter');
    //             }

    //             $newsLetterSubscribersModel->where('email', $email)->delete();

    //             return $this->response->setStatusCode(ResponseInterface::HTTP_OK)
    //                 ->setJSON(['status' => 'success', 'message' => 'You have been removed from newsletter subscribers.']);
    //         }
    //     } catch (Exception $e) {
    //         return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)
    //             ->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
    //     }
    // }

    // /**
    //  * Newsletter page
    //  * @return RedirectResponse|string
    //  */
    // public function newsletter()
    // {
    //     $sessionData = $this->getSessionData();
    //     $userModel = new UserModel();
    //     if ($sessionData['isLoggedIn'] && $sessionData['isLocked']) {
    //         return redirect()->to(base_url('authentication/lock_screen'));
    //     } elseif (!$sessionData['isLoggedIn']) {
    //         return redirect()->to(base_url('authentication/sign_in'));
    //     }
    //     $user = $userModel->find($sessionData['userInfo']['id']);
    //     $data = array_merge($sessionData, ['user' => $user], ['packages' => $this->fetch_packages()]);
    //     return view("App\Modules\AdminDashboard\Views\header", $data) .
    //         view("App\Modules\AdminDashboard\Views\sidebar", $data) .
    //         view("App\Modules\AdminDashboard\Views\Topbar", $data) .
    //         view("App\Modules\AdminDashboard\Views\Newsletter", $data) .
    //         view("App\Modules\AdminDashboard\Views\Footer", $data);
    // }
    // public function edit_newsletter()
    // {
    //     $sessionData = $this->getSessionData();
    //     $userModel = new UserModel();
    //     if ($sessionData['isLoggedIn'] && $sessionData['isLocked']) {
    //         return redirect()->to(base_url('authentication/lock_screen'));
    //     } elseif (!$sessionData['isLoggedIn']) {
    //         return redirect()->to(base_url('authentication/sign_in'));
    //     }
    //     $user = $userModel->find($sessionData['userInfo']['id']);
    //     $data = array_merge($sessionData, ['user' => $user], ['packages' => $this->fetch_packages()]);
    //     return view("App\Modules\AdminDashboard\Views\header", $data) .
    //         view("App\Modules\AdminDashboard\Views\sidebar", $data) .
    //         view("App\Modules\AdminDashboard\Views\Topbar", $data) .
    //         view("App\Modules\AdminDashboard\Views\Edit_newsletter", $data) .
    //         view("App\Modules\AdminDashboard\Views\Footer", $data);
    // }
}
