<?php

//...  

$routes->group("admindashboard", ["namespace" => "App\Modules\AdminDashboard\Controllers"], function ($routes) {

    $routes->get("/", "AdminDashboardController::index");
    $routes->match(['get', 'post'], "user_profile", "AdminDashboardController::user_profile");
    $routes->get("percentage", "AdminDashboardController::calculateNullPercentage");
    $routes->get('fetch_countries', 'AdminDashboardController::fetch_countries');
    $routes->get('fetch_counties', 'AdminDashboardController::fetch_counties');
    $routes->post('fetch_sub_counties', 'AdminDashboardController::fetch_sub_counties');
    $routes->get('fetch_modules', 'AdminDashboardController::fetch_modules');

    // course correct settings
    $routes->get('coursecorrect', 'AdminDashboardController::coursecorrect_settings');
    $routes->get('newsletter', 'AdminDashboardController::newsletter');
    $routes->get('edit_newsletter', 'AdminDashboardController::edit_newsletter');


    //gender settings
    $routes->get('gender', 'AdminDashboardController::get_genders');
    $routes->put('gender', 'AdminDashboardController::update_gender');
    $routes->post('gender', 'AdminDashboardController::add_gender');
    $routes->delete('gender', 'AdminDashboardController::delete_gender');
    $routes->post('subscribe', 'AdminDashboardController::subscribe_to_news_letter');
    $routes->post('unsubscribe', 'AdminDashboardController::unsubscribe_to_news_letter');

    //routes for fetching packages, modules, topics, and subtopics
    $routes->post('fetch_modules', 'AdminDashboardController::fetch_modules');
    $routes->post('fetch_topics_and_subtopics', 'AdminDashboardController::fetch_topics_and_subtopics');
});


//...
