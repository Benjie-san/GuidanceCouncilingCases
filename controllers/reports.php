<?php
session_start();
if (!$_SESSION['loggedIn']) {
  header('Location:/');
  exit();
}
$heading = "admin Dashboard";
require "views/reports.php";

