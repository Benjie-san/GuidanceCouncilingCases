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
  <section class="modal-container">
  <?php include_once('controllers/students/students-modal.php') ?>
  </section>
    
  <!-- main container -->
  <div class="container">

  <?php include_once 'components/nav.php' ?>
    <div class="main">  
    <?php include_once 'components/topBar.php' ?>
    
    <div class="header">
      <h2 class="title">Students</h2>
      <form class="sort" method="POST">
        Sort By: 
        <select name="sort" class="select">
          <option disabled selected value> SECTION </option>
          <option >GAS - A</option>
          <option>GAS - B</option>
          <option>GAS - C</option>
          <option>TVL - A</option>
          <option>TVL - B</option>
          <option>TVL - C</option>
          <option>ABM - A</option>
          <option>ABM - B</option>
          <option>ABM - C</option>
          <option>STEM - A</option>
          <option>STEM - B</option>
          <option>STEM - C</option>
          <option>HUMSS - A</option>
          <option>HUMSS - B</option>
          <option>HUMSS - C</option>
        </select>
        <input id="sort-btn" class="btn" type="submit" value="Sort">
      </form>
      <form class="sort" method="POST">
        Sort By: 
        <select name="sort" class="select">
        <option disabled selected value> STRAND </option>
          <option value="GAS">GAS</option>
          <option>TVL</option>
          <option>ICT</option>
          <option>ABM</option>
          <option>STEM</option>
          <option>HUMSS</option>
        </select>
        <input id="sort-btn" class="btn" type="submit" value="Sort">
      </form>
      <button class="btn add-open">Add Student</button>
    </div>

    <div class="tableContainer content">
        <?php 
        include_once 'database/db.php';
        
        if(isset($_GET['search-input'])){
          $filteredValues = $_GET['search-input'];
          $qry = "SELECT * FROM students WHERE CONCAT(STUDENT_ID, FIRSTNAME, LASTNAME, AGE, GRADE, SECTION, STRAND) LIKE '%$filteredValues%'";
          $result = $conn->query($qry);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $sortCriteria = $_POST['sort'];
          $qry = "SELECT * FROM students WHERE CONCAT(STUDENT_ID, FIRSTNAME, LASTNAME, AGE, GRADE, SECTION, STRAND) LIKE '%$sortCriteria%'";
          $result = $conn->query($qry);
        }  
        else{
          $qry = "SELECT * FROM students";
          $result = $conn->query($qry);
          }
        ?>
        <?php if($result->rowCount() > 0){ ?>
        <table class='table'>
        <thead>
          <tr id="category">
            <th scope="col">#</th>
            <th scope="col">Student ID</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Age</th>
            <th scope="col">Grade</th>
            <th scope="col">Section</th>
            <th scope="col">Strand</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
          <?php $id = 0; while($row = $result->fetch()){  ?>
          <tr class="tr">
            <td  id='id-cell' class='td-number'scope='row' class='th'><?php echo $id; ?></td> 
            <td id='student-id-cell' class="td" ><?php echo $row["STUDENT_ID"]; ?></td> 
            <td id='first-cell' class="td" ><?php echo $row["FIRSTNAME"]; ?></td> 
            <td id='last-cell' class="td" ><?php echo $row["LASTNAME"]; ?></td> 
            <td id='age-cell' class="td" ><?php echo $row["AGE"]; ?></td> 
            <td id='grade-cell' class="td" ><?php echo $row["GRADE"]; ?></td> 
            <td id='section-cell' class="td" ><?php echo $row["SECTION"]; ?></td>
            <td id='strand-cell' class="td" ><?php echo $row["STRAND"]; ?></td>

            <td class = "td tb-btn">
              <button class='btn' id="update">Update</button>
              
              <button onclick="sendID(<?php echo $row['ID'];?>)" class='btn' id="remove">Remove</button> 
              
            </td>  
          </tr>  
          <?php $id++; } ?> 
          <?php }else{ ?> 
            <tr class='tr'>
              <td class='td'>No Record Found</td>
            </tr>
          <?php } ?> 
        </tbody>
      </div>
    </div>
      
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="scripts/modal-scripts.js"> 
  </script>
  <script src="scripts/nav-script.js"></script>

</body>
</html>