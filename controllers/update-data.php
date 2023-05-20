<?php

$id = $_POST['id'];

$qry1 = "SELECT * FROM nat WHERE ID = $id";
$result = $conn->query($qry1);

$qry2 = "SELECT * FROM ap_rank WHERE ID = $id";
$result2 = $conn->query($qry2);


$qry3 = "SELECT * FROM ap_score WHERE ID = $id";
$result3 = $conn->query($qry3);


  while($row = $result->fetch()){
    $surname = $row['SURNAME'];
    $firstname = $row['FIRSTNAME'];
    $MI = $row['MI'];
    $gender = $row['GENDER'];
    $bday = $row['BDAY'];
    $lrn = $row['LRN_NO'];
    $examNo = $row['EXAMINEE_NO'];
    $schoolId = $row['SCHOOL_ID'];
    $HS = $row['HS'];
    $examDate = $row['EXAM_DATE'];
  }
  while($row = $result2->fetch()){
    $SA = $row["SA"];
    $RC = $row["RC"];
    $VA = $row["VA"];
    $MA = $row["MA"];
    $LRA = $row["LRA"];
    $GSA = $row["GSA"];
    $CA = $row["CA"];
    $NVA = $row["NVA"];
    $VMS = $row["VMS"];
    $TVA = $row["TVA"];
    $HUMMS = $row["HUMMS"];
    $STEM = $row["STEM"];
    $ABM = $row["ABM"];
    $AT = $row["AcadT"];
  }
  while($row = $result3->fetch()){
    $A = $row["SCORE_A"];
    $B = $row["SCORE_B"];
    $C = $row["SCORE_C"];
    $D = $row["SCORE_D"];
    $E = $row["SCORE_E"];
    $F = $row["SCORE_F"];
    $G = $row["SCORE_G"];
    $H = $row["SCORE_H"];
    $I = $row["SCORE_I"];
    $J = $row["SCORE_J"];
    $K = $row["SCORE_K"];
    $L = $row["SCORE_L"];
    $M = $row["SCORE_M"];
    $N = $row["SCORE_N"];
    $O = $row["SCORE_O"];
  }
?>
<input type='hidden' value="<?php echo $id?>">
<link rel="stylesheet" href="styles/update-nat.css">
<div class="formContainer">
        <input type="hidden" name="ID" value="<?php echo $id?>">
        <div class="row1">
          <div class="form1">
            <h1>General Info</h1>
            <div class="sub-form">
              <input type="text" name="EXAMINEE_NO" id="" value="<?php echo $examNo?>" required>
              <input type="text" name="SURNAME" id=""     value="<?php echo $surname?>" required>
              <input type="text" name="FIRSTNAME" id=""   value="<?php echo $firstname?>" required>
              <input type="text" name="MI" id=""          value="<?php echo $MI?>" required>
              <input type="text" name="GENDER" id=""      value="<?php echo $gender?>" required>
            </div>
            
            <div class="sub-form">
              <input type="text" name="BDAY" id="" value="<?php echo $bday?>" required>
              <input type="text" name="LRN_NO" id=""      value="<?php echo $lrn?>" required>
              <input type="text" name="EXAM_DATE" id=""   value="<?php echo $examDate?>" required>
              <input type="text" name="SCHOOL_ID" id=""   value="<?php echo $schoolId?>" required>
              <input type="text" name="HS" id=""          value="<?php echo $HS?>" required>
          </div>

          </div>
        
          <div class="form2">
            <h1>Average Percentile Rank</h1>
            <div class="sub-form">
              <input type="text" name="SA" id=""    value=" <?php echo $SA ?>" required>
              <input type="text" name="RC" id=""    value=" <?php echo $RC ?>" required>
              <input type="text" name="VA" id=""    value=" <?php echo $VA ?>" required>
              <input type="text" name="MA" id=""    value=" <?php echo $MA ?>" required>
              <input type="text" name="LRA" id=""   value=" <?php echo $LRA ?>" required>
            </div>
            <div class="sub-form">
              <input type="text" name="GSA" id=""   value=" <?php echo $GSA ?>" required>
              <input type="text" name="CA" id=""    value=" <?php echo $CA ?>" required>
              <input type="text" name="NVA" id=""   value=" <?php echo $NVA ?>" required>
              <input type="text" name="VMS" id=""   value=" <?php echo $VMS ?>" required>
              <input type="text" name="TVA" id=""   value=" <?php echo $TVA ?>" required>
            </div>
            <div class="sub-form">
              <input type="text" name="HUMMS" id="" value=" <?php echo $HUMMS ?>" required>
              <input type="text" name="STEM" id=""  value=" <?php echo $STEM ?>" required>
              <input type="text" name="ABM" id=""   value=" <?php echo $ABM ?>" required>
              <input type="text" name="AcadT" id="" value=" <?php echo $AT ?>" required>
            </div>
          </div>
        </div>
        <div class="row2">
          <div class="form3">
          <h1>Average Percentile Scores</h1>
              <div class="sub-form">
                <input type="text" name="SCORE_A" id="" value=" <?php echo $A?>" required>
                <input type="text" name="SCORE_B" id="" value=" <?php echo $B?>" required>
                <input type="text" name="SCORE_C" id="" value=" <?php echo $C?>" required>
                <input type="text" name="SCORE_D" id="" value=" <?php echo $D?>" required>
                <input type="text" name="SCORE_E" id="" value=" <?php echo $E?>" required>
              </div>
              <div class="sub-form">
                <input type="text" name="SCORE_F" id="" value=" <?php echo $F?>" required>
                <input type="text" name="SCORE_G" id="" value=" <?php echo $G?>" required>
                <input type="text" name="SCORE_H" id="" value=" <?php echo $H?>" required>
                <input type="text" name="SCORE_I" id="" value=" <?php echo $I?>" required>
                <input type="text" name="SCORE_J" id="" value=" <?php echo $J?>" required>
              </div>
              <div class="sub-form">
                <input type="text" name="SCORE_K" id="" value=" <?php echo $K?>" required>
                <input type="text" name="SCORE_L" id="" value=" <?php echo $L?>" required>
                <input type="text" name="SCORE_M" id="" value=" <?php echo $M?>" required>
                <input type="text" name="SCORE_N" id="" value=" <?php echo $N?>" required>
                <input type="text" name="SCORE_O" id="" value=" <?php echo $O?>" required>

              </div>
            </div>
            <input id="update-item" class="btn" type="submit" name="submit" value="Update">
        </div>
