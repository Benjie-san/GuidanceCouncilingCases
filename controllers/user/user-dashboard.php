<?php
session_start();
if (!$_SESSION['loggedIn']) {
  header('Location:/');
  exit();
}
$heading = "Welcome " . $_SESSION['username'];
require "views/user/user-dashboard.php";