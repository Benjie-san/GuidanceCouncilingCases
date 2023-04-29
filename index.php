
<?php

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/careerGuidance/'){
  require 'careerGuidance/controllers/login.php';
}
