<?php include('header.php'); ?> <!-- Including the header file -->

    <div class="background"
         style="background: url(<?= base_url('assets/img/pattern-1.svg') ?>) no-repeat center bottom fixed; background-size: cover;">

        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card p-3 rounded-plus bg-faded" style="background-color:lightblue">

                        <div id="alertMessage" class="alert alert-success d-none" role="alert">
                            Email sent! Please check your email for further instructions.
                        </div>

                        <div id="alertMessage2" class="alert alert-danger d-none" role="alert">
                            Please enter a valid email address.
                        </div>
                        <div role="alert">
                        <h3 class="text-center"><b>RESET PASSWORD</b></h3>
                        </div>
                        <form id="resetPasswordForm"
                              method="post">
                            <?= csrf_field() ?>
                            <div class="form-group">
                                <label for="email">Enter Email </label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                           aria-describedby="emailHelp" placeholder="Enter email" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-info-circle" title="Ensure you enter the correct email"></i></span>
                                    </div>
                                </div>
                               

                            </div>
                            
                            <div class="text-center">
                                <button type="submit"  id="resetPasswordButton">
                                    Reset
                                    Password
                                </button>
                            </div>
                            <b><p style="padding:10px; text-decoration:underline; color:black" class="text-center mb-0" ><a href="<?= route_to('authentication/sign_in') ?>">Back to Login</a></p></b>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('resetPasswordForm').addEventListener('submit', function (event) {
            event.preventDefault();

            fetch('', {
                url: '<?= base_url('authentication/send_reset_link') ?>',
                method: 'POST',
                body: new FormData(this)
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data.status);
                    if (data.status === 'success') {
                        document.getElementById('alertMessage').classList.remove('d-none');
                        setTimeout(function () {
                            window.location.href = '<?= base_url('authentication/sign_in') ?>';
                        }, 3000);
                    } else {
                        document.getElementById('alertMessage2').classList.remove('d-none');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });

        });
    </script>
<?php include('footer.php'); ?>