<?php
session_set_cookie_params(0, '/', '', true, true);
session_start();

if (!$_SESSION['loggedIn']) {
  header('Location:/');
  exit();
}
    
$heading = "Admin Dashboard";

require('views/admin/adminDashboard.php');

