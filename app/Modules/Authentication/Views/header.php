<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeratoScan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <!-- Bootstrap Icons CSS -->
    <link href="<?= base_url('assets/css/bootstrap-icons.css') ?>" rel="stylesheet">
    <!-- Vendors Bundle CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/vendors.bundle.css') ?>" media="screen, print">
    <!-- App Bundle CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.bundle.css') ?>" media="screen, print">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="#" id="mytheme" media="screen, print">
    <!-- Skin Master CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/skins/skin-master.css') ?>" media="screen, print">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/favicon/favicon-32x32.png') ?>">
    <link rel="mask-icon" href="<?= base_url('assets/img/favicon/safari-pinned-tab.svg') ?>" color="#5bbad5">
    <!-- Font Awesome Brands CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/fa-brands.css') ?>" media="screen, print">
    <link rel="stylesheet" href="<?= base_url('assets/css/fontawsome-min.css') ?>" media="screen, print">


    <style>
        body {
            background-color: #fbb117;
            overflow: auto;
        }
        button{
        color:white;
        background-color:#fbb117;
        border-color:#fbb117;
        padding: 0.375rem 0.75rem;
        font-size: 1rem; 
        border-radius: 0.25rem;}

        button:hover{
        background-color:#ffffff;
        color:#fbb117;
        border-color:#fbb117}
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:lightsteelblue ;padding: 20px 0;">
    <div class="container">
        <img src="<?= base_url('assets/img/eye-scan.png') ?>" alt="Logo" class="mr-2" style="height: 30px;">
        <!-- Add your logo image here -->
        <a class="navbar-brand" href="#" style="color: #000000"><b>KERATOSCAN</b></a>
        <!-- Navbar toggler button for small screens -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php if (session()->has('isLoggedIn') && session()->get('isLoggedIn') === true) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= route_to('authentication/sign_out') ?>">Logout</a>
                    </li>
                <?php else : ?>
                    <!-- If user is not logged in -->
                    <?php if (uri_string() === 'authentication/sign_in' || uri_string() === 'authentication/reset_password') : ?>
                        <!-- If user is on lock_screen or sign_in page -->
                        <li class="nav-item">
                            <!-- Button to navigate to sign_up page -->
                            <button onclick="window.location.href='<?= route_to('authentication/sign_up') ?>'">Create
                                Account
                            </button>
                        </li>
                    <?php elseif (uri_string() === 'authentication/sign_up' || uri_string() === 'authentication/lock_screen') : ?>
                        <!-- If user is on sign_up page -->
                        <li class="nav-item">
                            <!-- Button to navigate to sign_in page -->
                            <button onclick="window.location.href='<?= route_to('authentication/sign_in') ?>'">Secure
                                Login
                            </button>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
</body>

</html>