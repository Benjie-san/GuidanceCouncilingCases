<?php

if (!$_SESSION['loggedIn']) {
  header('Location:/');
  exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['submit'] == "Add" ){
  $value1 = $_POST["SURNAME"];
  $value2 = $_POST["FIRSTNAME"];
  $value3 = $_POST["MI"];
  $value4 = $_POST["GENDER"];
  $value5 = $_POST["BDAY"];
  $value6 = $_POST["LRN_NO"];
  $value7 = $_POST["EXAMINEE_NO"];
  $value8 = $_POST["EXAM_DATE"];
  $value9 = $_POST["SCHOOL_ID"];
  $value10 = $_POST["HS"];

  $value11 = $_POST["SA"];
  $value12 = $_POST["RC"];
  $value13 = $_POST["VA"];
  $value14 = $_POST["MA"];
  $value15 = $_POST["LRA"];
  $value16 = $_POST["GSA"];
  $value17 = $_POST["CA"];
  $value18 = $_POST["NVA"];
  $value19 = $_POST["VMS"];
  $value20 = $_POST["TVA"];
  $value21 = $_POST["HUMMS"];
  $value22 = $_POST["STEM"];
  $value23 = $_POST["ABM"];
  $value24 = $_POST["AcadT"];
  
  $value25 = $_POST["SCORE_A"];
  $value26 = $_POST["SCORE_B"];
  $value27 = $_POST["SCORE_C"];
  $value28 = $_POST["SCORE_D"];
  $value29 = $_POST["SCORE_E"];
  $value30 = $_POST["SCORE_F"];
  $value31 = $_POST["SCORE_G"];
  $value32 = $_POST["SCORE_H"];
  $value33 = $_POST["SCORE_I"];
  $value34 = $_POST["SCORE_J"];
  $value35 = $_POST["SCORE_K"];
  $value36 = $_POST["SCORE_L"];
  $value37 = $_POST["SCORE_M"];
  $value38 = $_POST["SCORE_N"];
  $value39 = $_POST["SCORE_O"];

  $sql1 = "INSERT INTO nat (SURNAME, FIRSTNAME, MI, GENDER, BDAY, LRN_NO, EXAMINEE_NO, EXAM_DATE, SCHOOL_ID,HS) VALUES (:value1, :value2, :value3, :value4, :value5, :value6, :value7, :value8, :value9, :value10)";

  $stmt1 = $conn->prepare($sql1);
  $stmt1->bindParam(':value1', $value1);
  $stmt1->bindParam(':value2', $value2);
  $stmt1->bindParam(':value3', $value3);
  $stmt1->bindParam(':value4', $value4); 
  $stmt1->bindParam(':value5', $value5);
  $stmt1->bindParam(':value6', $value6);
  $stmt1->bindParam(':value7', $value7);
  $stmt1->bindParam(':value8', $value8);
  $stmt1->bindParam(':value9', $value9);
  $stmt1->bindParam(':value10', $value10);
  $stmt1->execute();

  $sql2 = "INSERT INTO ap_rank (SA, RC, VA, MA, LRA, GSA, CA, NVA, VMS, TVA, HUMMS,STEM, ABM, AcadT) VALUES (:value11, :value12,:value13,:value14,:value15,:value16,:value17,:value18,:value19,:value20,:value21,:value22,:value23,:value24)";
  $stmt2 = $conn->prepare($sql2);
  $stmt2->bindParam(':value11', $value11);
  $stmt2->bindParam(':value12', $value12);
  $stmt2->bindParam(':value13', $value13);
  $stmt2->bindParam(':value14', $value14); 
  $stmt2->bindParam(':value15', $value15);
  $stmt2->bindParam(':value16', $value16);
  $stmt2->bindParam(':value17', $value17);
  $stmt2->bindParam(':value18', $value18);
  $stmt2->bindParam(':value19', $value19);
  $stmt2->bindParam(':value20', $value20);
  $stmt2->bindParam(':value21', $value21);
  $stmt2->bindParam(':value22', $value22);
  $stmt2->bindParam(':value23', $value23);
  $stmt2->bindParam(':value24', $value24); 
  $stmt2->execute();

  $sql3 = "INSERT INTO ap_score (SCORE_A, SCORE_B, SCORE_C, SCORE_D, SCORE_E, SCORE_F, SCORE_G, SCORE_H, SCORE_I, SCORE_J, SCORE_K, SCORE_L, SCORE_M, SCORE_N, SCORE_O) VALUES (:value25, :value26,:value27,:value28,:value29,:value30,:value31,:value32,:value33,:value34,:value35,:value36,:value37,:value38,:value39)";
  $stmt3 = $conn->prepare($sql3);
  $stmt3->bindParam(':value25', $value25);
  $stmt3->bindParam(':value26', $value26);
  $stmt3->bindParam(':value27', $value27);
  $stmt3->bindParam(':value28', $value28); 
  $stmt3->bindParam(':value29', $value29);
  $stmt3->bindParam(':value30', $value30);
  $stmt3->bindParam(':value31', $value31);
  $stmt3->bindParam(':value32', $value32);
  $stmt3->bindParam(':value33', $value33);
  $stmt3->bindParam(':value34', $value34);
  $stmt3->bindParam(':value35', $value35);
  $stmt3->bindParam(':value36', $value36);
  $stmt3->bindParam(':value37', $value37);
  $stmt3->bindParam(':value38', $value38); 
  $stmt3->bindParam(':value39', $value39);
  $stmt3->execute();
  


} 
else if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['submit'] == "Update" ){
  $id = $_POST['ID'];
  // $value1 = $_POST["DATE_ISSUED"];
  // $value2 = $_POST["OFFENSE"];
  // $value3 = $_POST["COMPLAINANT_NAME"];
  // $value4 = $_POST["RESPONDENT_NAME"];     // set the values in accordance to DB Fields
  // $value5 = $_POST["DEFENDED_BY"];
  // $value6 = $_POST["ACTION_TAKEN"];
  // $value7 = $_POST["CASE_STATUS"];
  // $value8 = $_POST["DATE_RESOLVED"];

  //$stmt = $conn->prepare("UPDATE cases SET DATE_ISSUED = ?, OFFENSE = ?, COMPLAINANT_NAME = ?, RESPONDENT_NAME = ?, DEFENDED_BY = ?, ACTION_TAKEN = ?, CASE_STATUS = ?, DATE_RESOLVED = ?  WHERE ID = ?");

  //$result = $stmt->execute([$value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8, $id]);
  echo $id;
}

require "views/nat/nat-modal.php";