<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('about', 'Home::about');
// $routes->get('contact', 'Home::contact');
// $routes->get('blog', 'Home::blog');
// $routes->get('header', 'Home::header');
// $routes->get('footer', 'Home::footer');
// $routes->get('peer_programming', 'Home::peer_programming');


$modules_path = APPPATH . 'Modules/';
$modules = scandir($modules_path);

foreach ($modules as $module) {
    if ($module === '.' || $module === '..') {
        continue;
    }

    if (is_dir($modules_path) . '/' . $module) {
        $routes_path = $modules_path . $module . '/Config/Routes.php';
        if (file_exists($routes_path)) {
            require $routes_path;
        } else {
            continue;
        }
    }
}
