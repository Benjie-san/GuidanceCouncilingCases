<?php

$uri =  parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => 'controllers/login.php',
  '/adminDashboard' => 'controllers/adminDashboard.php',
  '/list' => 'controllers/cases.php',
  '/nat' => 'controllers/reports.php',
  '/students' => 'controllers/students.php',
  '/accounts' => 'controllers/accounts.php',
  '/settings' => 'controllers/settings.php',
  '/logout' => 'controllers/logout.php',
];

if(array_key_exists($uri, $routes)){
  require $routes[$uri];
}else{
  http_response_code(404);

  echo "Sorry Not Found.";

  die();
}

