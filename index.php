
  <h1>hello world</h1>
    <?php
      include_once 'database/db.php';

      $qry = "SELECT * FROM students";
      $result = $conn->query($qry);   
      if(mysqli_num_rows($result) > 0){
          while($row = $result->fetch_assoc()){
              $id = $row['ID'];
              $first = $row["NAME"];
              $last = $row["AGE"];
              $email = $row["GRADE"];
              $number = $row["SECTION"];
          }
      }else{
          echo "no result";
      } 
    ?>

    <h1><?php echo $id?></h1>
    <h1><?php echo $first?></h1>  
    <h1><?php echo $last?></h1>
    <h1><?php echo $email?></h1>
    <h1><?php echo $number?></h1>
