<?php

include_once 'database/db.php';

function infoExists($conn, $email){
    $sql = "SELECT * FROM users WHERE USERNAME = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:/index.php?error=statement-failed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt); 

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        //code
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function logIn($conn, $logEmail, $logPass){

  $userExists = infoExists($conn, $logEmail);

  if($userExists === false){
      header("location:/index.php?error=loginError");
      exit();
  }
  
  $passExists = $userExists["a_password"];
  $checkPass = $logPass === $passExists;

  if($checkPass === false){
      header("location:/index.php?error=wrongPass");
      exit();
  }

  else if($checkPass === true){
      session_start();
      $_SESSION['applicant_id'] = $userExists["id"];
      $_SESSION['applicant_email'] = $userExists["a_email"];
      
      header("location:../controller/adminDashbaord.php");
      exit();
  }

}

if(isset($_POST['loginSubmit'])){
  $username = $_POST['loginName'];
  $pass = $_POST['loginPass'];

  logIn($conn, $username, $pass);
}