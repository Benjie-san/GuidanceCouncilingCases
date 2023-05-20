<?php

session_start();

$_SESSION['loggedIn'] = false;

require_once 'database/db.php';

function logIn($conn, $username, $password){

    $sql = "SELECT * FROM users WHERE USERNAME = '$username'";
    $result = $conn->query($sql);
    while($row = $result->fetch()){
        $user = $row["USERNAME"];
        $pass = $row["PASSWORD"];
    };  
    
    if($username == $user && $password == $pass){
        // $token = bin2hex(random_bytes(16));

        // $_SESSION['token'] = $token;
        //setcookie('token', $token, time() + 3600, '/', '', true, true);
        $_SESSION['loggedIn'] = true;
        header ('location:/students');
    }else{
        header("location:/index.php?error=loginError");
        exit();
    }

}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['loginName'];
    $pass = $_POST['loginPass'];
    logIn($conn, $username, $pass);

}

require "views/login.php";


