<?php
session_start();

if (!$_SESSION['loggedIn']) {
  header('Location:/');
  exit();
}
    
$heading = "Dashboard";

require('views/admin/adminDashboard.php');

