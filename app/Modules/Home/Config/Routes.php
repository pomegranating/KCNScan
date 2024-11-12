<?php

//...  

$routes->group("home", ["namespace" => "App\Modules\Home\Controllers"], function ($routes) {
    $routes->get('', 'HomeController::index');
    $routes->get('projects', 'HomeController::projects');
    $routes->get('course_correct', 'HomeController::course_correct');
    $routes->get('about', 'HomeController::about');
    $routes->get('contact', 'HomeController::contact');
    $routes->get('header', 'HomeController::header');
    $routes->get('footer', 'HomeController::footer');
    $routes->get('peer_programming', 'HomeController::peer_programming');
    $routes->get('interview_preparation', 'HomeController::interview_preparation');
    $routes->get('code_mentorship', 'HomeController::code_mentorship');
});


//...
