<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="styles/dashboard-style.css">
  <link rel="stylesheet" href="styles/students-style.css">
 
  <title>Students</title>
</head>
<body>

  <!-- modals -->  

  <?php include_once('controllers/students-modal.php') ?>

  <!-- main container -->
  <div class="container">
  <?php include_once 'components/nav.php' ?>
    <div class="main">  
    <?php include_once 'components/topBar.php' ?>

    <div class="header">
      <h2 class="title"><?php echo $heading?></h2>
      <button class="btn" onclick="openModal('add')">Add Students</button>
    </div>

    <div class="tableContainer">
        <?php 
        include_once 'database/db.php';
        $qry = "SELECT * FROM students";
        $result = $conn->query($qry);
        ?>
        <?php if($result->rowCount() > 0){ ?>
        <table class='table'>
        <thread>
          <tr id="category">
            <th scope="col">#</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Age</th>
            <th scope="col">Grade</th>
            <th scope="col">Section</th>
            <th scope="col">Operation</th>
          </tr>
        </thread>
        <?php while($row = $result->fetch()){ ?>
        <tr class="tr">
          <td class='td-number'scope='row' class='th'><?php echo $row['ID']; ?></td> 
          <td class="td" ><?php echo $row["FIRSTNAME"]; ?></td> 
          <td class="td" ><?php echo $row["LASTNAME"]; ?></td> 
          <td class="td" ><?php echo $row["AGE"]; ?></td> 
          <td class="td" ><?php echo $row["GRADE"]; ?></td> 
          <td class="td" ><?php echo $row["SECTION"]; ?></td>
          <td class = "td tb-btn">
            <button onclick="openModal('update')" class='btn' id="update">Update</button>
            <button onclick="openModal('remove',<?php echo $row['ID'];?>)" class='btn' id="remove">Remove</button> 
          </td>  
        </tr>  
        <?php } ?> 
        <?php }else{ ?> 
          <tr class='tr'>
            <td class='td'>No Record Found</td>
          </tr>
        <?php } ?> 
      </div>
    </div>
      
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="scripts/modal-scripts.js"> 
  </script>
  <script src="scripts/nav-script.js"></script>
  <script src=""></script>
</body>
</html>