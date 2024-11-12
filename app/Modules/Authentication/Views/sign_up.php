<?php include 'header.php'; ?> <!-- Including the header file -->

    <div 
         style="background-color: #ffffff;">

        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0" >
            <div class="row justify-content-center" >
                <div style=" width:60%; margin:auto" >
                    <div class="card p-4 rounded-plus bg-faded" style="background-color: lightblue" >
                        <?php if (isset($error)) : ?>
                            <!-- Displaying an error message if $error variable is set -->
                            <div class="alert alert-danger" role="alert">
                                <?= $error ?>
                            </div>
                        <?php endif; ?>
                        <!-- Welcome message -->
                        <?php if (session()->has('success')) : ?>
                            <div id="successAlert" class="alert alert-success" role="alert">
                                <?= session()->get('success') ?>
                            </div>
                        <?php endif; ?>
                       
                            <h3 class="text-center"><b>REGISTRATION</b></h3>
                        
                        <!-- Registration form -->
                        <form action="<?= base_url('/authentication/sign_up'); ?>" method="post" >
                            <?= csrf_field() ?> <!-- CSRF protection -->
                            
                                <!-- First name input field -->
                                <div class="form-group">
                                    <label><b>First Name</b></label>
                                    <input type="text" class="form-control" id="firstName" name="firstName"
                                           placeholder="First Name" required>
                                </div>
                                <!-- Last name input field -->
                                <div class="form-group">
                                <label><b>Last Name</b></label>
                                    <input type="text" class="form-control" id="lastName" name="lastName"
                                           placeholder="Last Name" required>
                                </div>
                            
                            <!-- Email input field -->
                            <div class="form-group">
                            <label><b>Email</b></label>
                                <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter email" required>
                                <small > Email will be used as the username</small>
                            </div>
                            <!-- Password input field -->
                            <div class="form-group">
                            <label><b>Password</b></label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Password" required>
                                <small>Your password must be 8-20 characters long,
                                    contain
                                    letters and numbers, and must not contain spaces, special characters, or
                                    emoji.</small>
                            </div>
                            
                            <!-- Register button -->
                            <div class="text-left">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>