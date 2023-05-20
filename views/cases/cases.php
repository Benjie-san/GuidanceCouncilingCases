<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/dashboard-style.css">
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/cases-style.css">
  <title>Cases</title>
</head>
<body>

  <section class="modal-container">
  <?php include_once('controllers/cases/cases-modal.php') ?>
  </section>
    

  <div class="container">
    <?php include_once 'components/nav.php' ?>
    <div class="main">  
      <?php include_once 'components/topBar.php' ?>
      <div class="header">
        <h2 class="title"><?php echo $heading?></h2>
        <button class="btn add-open">Add Cases</button>
      </div>

      <div class="tableContainer content">
        <?php   
        include_once 'database/db.php';

       
          $qry = "SELECT * FROM cases";
          $result = $conn->query($qry);
        
        ?>
        <?php if($result->rowCount() > 0){ ?>
        <table class='table'>
        <thread>
          <tr id="category">
            <th scope="col">#</th>
            <th scope="col">Date Issued</th>
            <th scope="col">Offense</th>
            <th scope="col">Complainant Name</th>
            <th scope="col">Respondent Name</th>
            <th scope="col">Defended By</th>
            <th scope="col">Action Taken</th>
            <th scope="col">Status</th>
            <th scope="col">Date Resolved</th>
            <th scope="col">Operation</th>
          </tr>
        </thread>
        <?php while($row = $result->fetch()){ ?>
        <tr class="tr">
          <td id='id-cell' class='td-number'scope='row' class='th'><?php echo $row['ID']; ?></td> 
          <td id='date-cell' class="td" ><?php echo $row["DATE_ISSUED"]; ?></td> 
          <td id='off-cell' class="td" ><?php echo $row["OFFENSE"]; ?></td> 
          <td id='com-cell' class="td" ><?php echo $row["COMPLAINANT_NAME"]; ?></td> 
          <td id='res-cell' class="td" ><?php echo $row["RESPONDENT_NAME"]; ?></td> 
          <td id='def-cell' class="td" ><?php echo $row["DEFENDED_BY"]; ?></td>
          <td id='action-cell' class="td" ><?php echo $row["ACTION_TAKEN"]; ?></td> 
          <td id='status-cell' class="td" ><?php echo $row["CASE_STATUS"]; ?></td> 
          <td id='dateRes-cell' class="td" ><?php echo $row["DATE_RESOLVED"]; ?></td> 
          <td class = "td tb-btn">
            <button class='btn' id="update">Update</button>
            
            <button onclick="sendID(<?php echo $row['ID'];?>)" class='btn' id="remove">Remove</button> 
          </td>  
        </tr>  
        <?php } ?> 
        <?php }else{ ?> 
          <tr class='elsetr'>
            <td class='elsetd'>No Record Found</td>
          </tr>
        <?php } ?> 
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="scripts/modal-cases.js"> </script>
  <script src="scripts/nav-script.js"></script>
</body>
</html>