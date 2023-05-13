<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/dashboard-style.css">
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/nat-style.css">
  <title>NAT List</title>
</head>
<body>

  <section class="modal-container">
  <?php include_once('controllers/nat/nat-modal.php') ?>
  </section>
    
  <div class="container">
  <?php include_once 'components/nav.php' ?>
    <div class="main">  
    <?php include_once 'components/topBar.php' ?>
    <div class="header">
        <h2 class="title"><?php echo $heading?></h2>
        <button class="btn add-open">Add NAT Data</button>
    </div>
    <div class="tableContainer content">
        <?php   
        include_once 'database/db.php';
        $qry = "SELECT * FROM nat";
        $result = $conn->query($qry);
        ?>
        <?php if($result->rowCount() > 0){ ?>
        <table class='table'>
        <thread>
          <tr id="category">
            <th scope="col">#</th>
            <th scope="col">Surname</th>
            <th scope="col">Firstname</th>
            <th scope="col">M</th>
            <th scope="col">Gender</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">LRN NO.</th>
            <th scope="col">Operation</th>
          </tr>
        </thread>
        <?php while($row = $result->fetch()){ ?>
        <tr class="tr">
          <td id='id-cell' class='td-number'scope='row' class='th'><?php echo $row['ID']; ?></td> 
          <td id='date-cell' class="td" ><?php echo $row["SURNAME"]; ?></td> 
          <td id='off-cell' class="td" ><?php echo $row["FIRSTNAME"]; ?></td> 
          <td id='com-cell' class="td" ><?php echo $row["MI"]; ?></td> 
          <td id='res-cell' class="td" ><?php echo $row["GENDER"]; ?></td> 
          <td id='def-cell' class="td" ><?php echo $row["BDAY"]; ?></td>
          <td id='action-cell' class="td" ><?php echo $row["LRN_NO"]; ?></td> 
                
          <td class="td tb-btn">
            <button class="btn" id="view" >View</button>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="scripts/modal-nat.js"> </script>
  <script src="scripts/nav-script.js"></script>
</body>
</html>