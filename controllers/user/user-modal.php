<?php
include_once 'database/db.php';
if (!$_SESSION['loggedIn']) {
  header('Location:/');
  exit();
}
require('views/user/user-modal.php');