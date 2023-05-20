<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/dashboard-style.css">
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/listGrads-style.css">
  <title>List of Graduates</title>
</head>
<body>
  <div class="container">
    <?php include_once 'components/nav.php' ?>
    <div class="main">  
      <?php include_once 'components/topBar.php' ?>
      <div class="header">
        <h2 class="title"><?php echo $heading?></h2>
        <span></span>
      </div>


      <div class="tableContainer content">
        <?php   
        include_once 'database/db.php';
        
        if(isset($_GET['search-input'])){
          $filteredValues = $_GET['search-input'];
          $qry = "SELECT * FROM grad_list WHERE CONCAT(NAME, GENDER, BATCH) LIKE '%$filteredValues%'";
          $result = $conn->query($qry);
        }else{
          $qry = "SELECT * FROM grad_list";
          $result = $conn->query($qry);
        }
        ?>
        <?php if($result->rowCount() > 0){ ?>
        <table class='table'>
        <thread>
          <tr id="category">
            <th scope="col">NAME</th>
            <th scope="col">GENDER</th>
            <th scope="col">BATCH</th>
      
          </tr>
        </thread>
        <?php while($row = $result->fetch()){ ?>
        <tr class="tr">
          <td  class="td" ><?php echo $row["NAME"]; ?></td> 
          <td  class="td" ><?php echo $row["GENDER"]; ?></td> 
          <td class="td" ><?php echo $row["BATCH"]; ?></td> 
          
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