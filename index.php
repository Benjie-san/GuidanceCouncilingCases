
<link rel="stylesheet" href="./styles/global.css">
<h1>Hello benj</h1>
<?php

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/'){
  require './controllers/login.php';
}
