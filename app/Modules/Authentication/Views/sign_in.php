<?php include 'header.php'; ?> <!-- Including the header file -->
<style>
    
        button{
        color:white;
        background-color:#fbb117;
        text-decoration: none;
        font-size: 1rem; 
        }

        button:hover{
        background-color:#ffffff;
        color:#fbb117;
        border-color:#fbb117}
    </style>
<div 
     style="background-color: #ffffff">
    <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
        <div class="row ">
            
            <div  style="width:60%; margin:auto">
                <!-- Heading for login section -->
                
                <!-- Login form -->
                <div class="card p-4 rounded-plus bg-faded " style="background-color:lightblue">
                    <h3 class="text-center mb-4"><b>SIGN IN</b></h3>
                    <form id="js-login" novalidate="" action="<?= site_url('authentication/sign_in') ?>" method="post">
                        <?= csrf_field() ?> <!-- CSRF protection -->
                        <!-- Username input field -->
                        <div class="form-group">
                            <label class="form-label" for="username">Username</label>
                            <!-- Displaying error message if any -->
                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger mb-2" role="alert">
                                    <?= $error ?>
                                </div>
                            <?php endif; ?>
                            <input name="email" type="email" id="username" class="form-control form-control-lg"
                                   placeholder="Your ID or email" required>
                            <div class="invalid-feedback">No, you missed this one.</div>
                            <div class="help-block">Your unique username.</div>
                        </div>
                        <!-- Password input field -->
                        <div class="form-group">
                            <label class="form-label" for="password">Password</label>
                            <input name="password" type="password" id="password" class="form-control form-control-lg"
                                   placeholder="Password" required>
                            <div class="invalid-feedback">Sorry, you missed this one.</div>
                            <div class="help-block">Your password</div>
                        </div>
                        <!-- Remember me checkbox -->
                        <div class="form-group text-left">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rememberme">
                                <label class="custom-control-label" for="rememberme"> Remember me for the next 30
                                    days</label>
                            </div>
                        </div>
                        <!-- Sign in buttons -->
                        <div class="row no-gutters">
                            <!-- <div class="col-lg-6 pr-lg-1 my-2">
                                <button type="submit" class="btn btn-info btn-block btn-lg">Sign in with <i
                                            class="fab fa-google"></i></button>
                            </div> -->
                            <div class="col-lg-6 pl-lg-1 my-2 text-left">
                                <button id="js-login-btn" type="submit" >Secure
                                    login
                                </button>
                            </div>

                        </div>
                        <p class="text-left"><a href="<?= route_to('authentication/send_reset_link') ?>"
                                                 class="text-black">Forgot password?</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?> <!-- Including the footer file -->