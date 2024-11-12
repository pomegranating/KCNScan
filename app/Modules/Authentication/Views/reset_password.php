<?php include('header.php'); ?>

<div class="background"
     style="background: url(<?= base_url('assets/img/pattern-1.svg') ?>) no-repeat center bottom fixed; background-size: cover;">

    <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-3 rounded-plus bg-faded">
                    <?php if (isset($error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error ?>
                        </div>
                    <?php endif; ?>
                    <!-- Alert message -->
                    <div id="alertMessage" class="alert alert-success d-none" role="alert">
                        Password Changed! Your password has been successfully changed.
                    </div>
                    <div class="alert alert-primary text-dark" role="alert">
                        <strong>Change Your Password</strong> Enter your new password below.
                    </div>
                    <form id="changePasswordForm" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="new-password">New Password:</label>
                            <input type="password" class="form-control" id="new-password" name="new_password" required>
                            <i class="fas fa-info-circle" id="passwordInfoIcon" title="Password Strength: 
                                - Lowercase & Uppercase letters
                                 - Number (0-9)
                                 - Special Character (!@#$%^&*)
                                 - At least 8 characters"></i> Discover more! Hover around the icon see the instructions

                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirm-password" name="confirm_password"
                                   required>
                            <small id="passwordMismatchError" class="text-danger d-none">Passwords do not match.</small>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-danger button" id="changePasswordButton"
                                    disabled>Change Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const newPasswordInput = document.getElementById('new-password');
        const confirmPasswordInput = document.getElementById('confirm-password');
        const passwordMismatchError = document.getElementById('passwordMismatchError');
        const changePasswordButton = document.getElementById('changePasswordButton');

        confirmPasswordInput.addEventListener('keyup', function () {
            if (newPasswordInput.value !== confirmPasswordInput.value) {
                passwordMismatchError.classList.remove('d-none');
                changePasswordButton.disabled = true;
            } else {
                passwordMismatchError.classList.add('d-none');
                changePasswordButton.disabled = false;
            }
        });
    });
</script>