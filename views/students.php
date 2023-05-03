<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/dashboard-style.css">
  <link rel="stylesheet" href="styles/students-style.css">
  <title>Students</title>
</head>
<body>
  <div class="container">
  <?php include_once 'components/nav.php' ?>
    <div class="main">  
    <?php include_once 'components/topBar.php' ?>

    <div class="header">
      <h2 class="title"><?php echo $heading?></h2>
      <button class="btn">Add Item</button>
    </div>

    <div class="tableContainer">
        <?php 
        include_once 'database/db.php';
        $qry = "SELECT * FROM students";
        $result = $conn->query($qry);
        ?>
        <?php if(mysqli_num_rows($result) > 0){ ?>
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
        <?php while($row = $result->fetch_assoc()){ ?>
        <tr class="tr">
          <td class='td-number'scope='row' class='th'><?php echo $row['ID']; ?></td> 
          <td class="td" ><?php echo $row["FIRSTNAME"]; ?></td> 
          <td class="td" ><?php echo $row["LASTNAME"]; ?></td> 
          <td class="td" ><?php echo $row["AGE"]; ?></td> 
          <td class="td" ><?php echo $row["GRADE"]; ?></td> 
          <td class="td" ><?php echo $row["SECTION"]; ?></td>
          <td class = "td tb-btn">
            <button class='btn' id='update' >Update</button>
            <button class='btn' id='remove'>Remove</button> 
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
  <script src="scripts/nav-script.js"></script>
</body>
</html>