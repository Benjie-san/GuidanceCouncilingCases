<?php
include_once 'database/db.php';
if (!$_SESSION['loggedIn']) {
  header('Location:/');
  exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['submit'] == "Add" ){
  $value1 = $_POST["USERNAME"];
  $value2 = $_POST["EMAIL"];
  $value3 = $_POST["NUMBER"];
  $value4 = password_hash($_POST["PASSWORD"], PASSWORD_DEFAULT);
  $value5 = $_POST["ROLE"];
  $value6 = $_POST["PRIVILEDGE"];

  $sql = "INSERT INTO users (USERNAME, EMAIL, NUMBER, PASSWORD, ROLE, PRIVILEDGE) VALUES (:value1, :value2, :value3, :value4, :value5, :value6)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':value1', $value1);
  $stmt->bindParam(':value2', $value2);
  $stmt->bindParam(':value3', $value3);
  $stmt->bindParam(':value4', $value4);
  $stmt->bindParam(':value5', $value5);
  $stmt->bindParam(':value6', $value6);


  $result = $stmt->execute();
  $response;

  if ($result) {
    $num_rows = $stmt->rowCount();

    if ($num_rows > 0) {
      echo "Data inserted successfully!";
    }
    
  }
} 
else if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['submit'] == "Update" ){
  $id = $_POST['ID'];
  $value1 = $_POST["USERNAME"];
  $value2 = $_POST["EMAIL"];
  $value3 = $_POST["NUMBER"];
  $value4 = password_hash($_POST["PASSWORD"], PASSWORD_DEFAULT);
  $value5 = $_POST["ROLE"];
  $value6 = $_POST["PRIVILEDGE"];

  $stmt = $conn->prepare("UPDATE users SET USERNAME = ?, EMAIL = ?,NUMBER = ?,PASSWORD = ?,ROLE = ?, PRIVILEDGE = ? WHERE ID = ?");

  $result = $stmt->execute([$value1, $value2, $value3, $value4, $value5, $value6, $id]);
  if ($result) {
    $num_rows = $stmt->rowCount();

    if ($num_rows > 0) {
      echo "Data inserted successfully!";
    }
  }
}

require('views/accounts/accounts-modal.php');