
<?php

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/careerGuidance/'){
  require 'controllers/login.php';
}
