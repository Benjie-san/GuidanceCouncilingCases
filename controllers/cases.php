<?php
session_start();
if (!$_SESSION['loggedIn']) {
  header('Location:/');
  exit();
}
$heading = "Cases";
require "views/cases.php";