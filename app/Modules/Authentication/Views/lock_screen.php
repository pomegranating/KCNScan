<?php include('header.php'); ?>

    <div class="flex-1"
         style="background: url(img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
            <div class="row" style="margin-top: 3%;">
                <div class="col-md-6 col-lg-7 hidden-sm-down">
                    <!-- Heading and description -->
                    <h2 class="fs-xxl fw-500 mt-4 "style="color:black">
                        Lock Screen
                        <small class="h3 fw-300 mt-3 mb-5 opacity-60" style="color:black">
                            For increased security, please enter your password to unlock the screen. Authorization
                            is only to available to registered users. This keeps away any unwanted users from accessing
                            patient records!
                        </small>
                    </h2>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 ml-auto">
                    <!-- Lock screen form -->
                    <div class="card p-4 rounded-plus bg-faded position-relative">
                        <form id="js-login" role="form" class="text-center text-white" id="unlockForm"
                              action="<?= route_to('authentication/lock_screen') ?>" method="post">
                            <div class="row justify-content-center mb-3 align-items-center">
                                <?php if (isset($userInfo)) : ?>
                                    <div class="col-auto mr-3">
                                        <img src="<?= base_url('assets/img/demo/avatars/avatar-m.png') ?>"
                                             class="img-responsive rounded-circle img-thumbnail"
                                             style="max-width: 100px;" alt="thumbnail">
                                    </div>
                                    <div class="col-auto">
                                        <h3><?= $userInfo['first_name'] ?> <?= $userInfo['last_name'] ?></h3>
                                        <p><?= $userInfo['email'] ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger mb-3" role="alert">
                                    <?= $error ?>
                                </div>
                            <?php endif; ?>
                            <input type="hidden" name="action" value="unlock">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg"
                                       placeholder="Password" required>
                            </div>
                            <div class="form-group text-left">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberme">
                                    <label class="custom-control-label" for="rememberme" style="color: black;"> Remember
                                        me for the next 30
                                        days</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" >Unlock</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>