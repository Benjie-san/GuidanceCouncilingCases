<?php
include_once 'database/db.php';
if (!$_SESSION['loggedIn']) {
  header('Location:/');
  exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['submit'] == "Add" ){
  $value1 = $_POST["FIRSTNAME"];
  $value2 = $_POST["LASTNAME"];
  $value3 = $_POST["AGE"];
  $value4 = $_POST["GRADE"];
  $value5 = $_POST["SECTION"];

  $sql = "INSERT INTO students (FIRSTNAME, LASTNAME, AGE, GRADE, SECTION) VALUES (:value1, :value2, :value3, :value4, :value5)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':value1', $value1);
  $stmt->bindParam(':value2', $value2);
  $stmt->bindParam(':value3', $value3);
  $stmt->bindParam(':value4', $value4);
  $stmt->bindParam(':value5', $value5);

  $result = $stmt->execute();
  $response;
  if ($result) {
    $num_rows = $stmt->rowCount();

    if ($num_rows > 0) {
      echo "Data inserted successfully!";
    }
    else {
      echo "Error inserting data: " . $stmt->errorInfo()[2];
    }
  }
} else if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['submit'] == "Update"){
  echo 'data will be updated';
  
}
require('views/students-modal.php');