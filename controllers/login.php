<?php

session_start();

$_SESSION['loggedIn'] = false;

require_once 'database/db.php';

function logIn($conn, $username, $password){

    $stmt = $conn->prepare("SELECT * FROM users WHERE USERNAME = ?");
    $stmt->execute([$username]);
    if($stmt -> rowCount() === 1) {
        $user = $stmt->fetch();
        $user_name = $user["USERNAME"];
        $user_pass = $user["PASSWORD"];
        $user_role = $user["ROLE"];
        if($username === $user_name){
            if(password_verify($password, $user_pass)){
                if($user_role === "ADMIN"){
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['role'] = $user_role;
                    $_SESSION['username'] = $user_name;
                    header('location:/adminDashboard');
                }else if($user_role === "STUDENT"){
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['role'] = $user_role;
                    $_SESSION['username'] = $user_name;
                    header('location:/user-dashboard');
                }else if($user_role === "TEACHER"){
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['role'] = $user_role;
                    $_SESSION['username'] = $user_name;
                    header('location:/user-dashboard');
                }
            }else{
                header('location:/?error=Incorrect Username or Password');
            }
        }else{
            header('location:/?error=Incorrect Username or Password');
        }
    }else{
        header('location:/?error=Incorrect Username or Password');
    }  

}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['loginName'];
    $pass = $_POST['loginPass'];
    logIn($conn, $username, $pass);

}

require "views/login.php";


