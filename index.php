
<?php

$uri = $_SERVER['REQUEST_URI'];

if($uri === './'){
  require './controllers/login.php';
}
