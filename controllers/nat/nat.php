<?php
session_start();
if (!$_SESSION['loggedIn']) {
  header('Location:/');
  exit();
}
$heading = "NAT";
require "views/nat/nat.php";