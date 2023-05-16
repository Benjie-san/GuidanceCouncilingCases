<?php
session_start();
if (!$_SESSION['loggedIn']) {
  header('Location:/');
  exit();
}
$heading = "NCAE";
require "views/nat/nat.php";