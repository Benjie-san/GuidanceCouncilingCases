<?php
include_once 'database/db.php';
if (!$_SESSION['loggedIn']) {
  header('Location:/');
  exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['submit'] == "Add" ){
  $value1 = $_POST["DATE_ISSUED"];
  $value2 = $_POST["OFFENSE"];
  $value3 = $_POST["COMPLAINANT_NAME"];
  $value4 = $_POST["RESPONDENT_NAME"];
  $value5 = $_POST["DEFENDED_BY"];
  $value6 = $_POST["ACTION_TAKEN"];
  $value7 = $_POST["CASE_STATUS"];
  $value8 = $_POST["DATE_RESOLVED"];
  

  $sql = "INSERT INTO cases (DATE_ISSUED, OFFENSE, COMPLAINANT_NAME, RESPONDENT_NAME, DEFENDED_BY, ACTION_TAKEN, CASE_STATUS, DATE_RESOLVED) VALUES (:value1, :value2, :value3, :value4, :value5, :value6, :value7, :value8)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':value1', $value1);
  $stmt->bindParam(':value2', $value2);
  $stmt->bindParam(':value3', $value3);
  $stmt->bindParam(':value4', $value4);
  $stmt->bindParam(':value5', $value5);
  $stmt->bindParam(':value6', $value6);
  $stmt->bindParam(':value7', $value7);
  $stmt->bindParam(':value8', $value8);
  
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
  $value1 = $_POST["DATE_ISSUED"];
  $value2 = $_POST["OFFENSE"];
  $value3 = $_POST["COMPLAINANT_NAME"];
  $value4 = $_POST["RESPONDENT_NAME"];
  $value5 = $_POST["DEFENDED_BY"];
  $value6 = $_POST["ACTION_TAKEN"];
  $value7 = $_POST["CASE_STATUS"];
  $value8 = $_POST["DATE_RESOLVED"];

  $stmt = $conn->prepare("UPDATE cases SET DATE_ISSUED = ?, OFFENSE = ?, COMPLAINANT_NAME = ?, RESPONDENT_NAME = ?, DEFENDED_BY = ?, ACTION_TAKEN = ?, CASE_STATUS = ?, DATE_RESOLVED = ?  WHERE ID = ?");

  $result = $stmt->execute([$value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8, $id]);
 
  if ($result) {
    $num_rows = $stmt->rowCount();

    if ($num_rows > 0) {
      echo "Data inserted successfully!";
    }
  }
}

require('views/cases/cases-modal.php');