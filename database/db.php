<?php
//credential
// $dbServername = "sql305.epizy.com";
// $dbUsername = "epiz_34076304";
// $dbPassword = "1QGEuAyZ0j17PXo";
// // //database
// $dbName = "epiz_34076304_careerGuidance";
//   $dsn = "mysql: dbname= epiz_34076304_careerGuidance; host=sql305.epizy.com";
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "1thousand-7";
$dbName = "careerguidance";

$dsn = "mysql: dbname=careerGuidance; host=localhost";


//$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
//  $conn = new PDO($dsn, $dbUsername, $dbPassword);
//  $conn->query("USE epiz_34076304_careerGuidance");

$conn = new PDO($dsn, $dbUsername, $dbPassword);
$conn->query("USE careerguidance");


