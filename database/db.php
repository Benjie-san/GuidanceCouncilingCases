<?php
//credential
// $dbServername = "sql305.epizy.com";
// $dbUsername = "epiz_34076304";
// $dbPassword = "1QGEuAyZ0j17PXo";
// //database
// $dbName = "epiz_34076304_careerGuidance";
//   $dsn = "mysql: dbname= epiz_34076304_careerGuidance; host=sql305.epizy.com";

// // $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
//  $conn = new PDO($dsn, $dbUsername, $dbPassword);
//  $conn->query("USE epiz_34076304_careerGuidance");

$dbconn = pg_connect("host=<dpg-ch6mp8g2qv26p199g300-a> port=<5432> dbname=<db_sprcnhs> user=<developer1> password=<vLCbxFvZ0ov1hJmPx3QTEwVRupMF1Nyp>");


