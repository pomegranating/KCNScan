<?php

//...  

$routes->group("authentication", ["namespace" => "App\Modules\Authentication\Controllers"], function ($routes) {

    $routes->match(['get', 'post'], 'sign_up', "AuthenticationController::sign_up");

    $routes->get('activate_account/(:segment)', 'AuthenticationController::activate_account/$1');

    $routes->match(['get', 'post'], 'sign_in', "AuthenticationController::sign_in");

    $routes->get('sign_out', "AuthenticationController::sign_out");

    $routes->get('auto_lock', "AuthenticationController::autoLock");

    $routes->match(['get', 'post'], 'lock_screen', "AuthenticationController::lock_screen");

    $routes->match(['get', 'post'], "reset_password/(:segment)", "AuthenticationController::resetPassword/$1");

    $routes->get("send_reset_link", "AuthenticationController::send_password_reset");
    $routes->post("send_reset_link", "AuthenticationController::sendResetPasswordLink");


});


//...
