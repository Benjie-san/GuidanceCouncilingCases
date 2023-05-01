<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/adminDashboard-style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
  <body>
    <div class="container">
      <?php include_once 'components/nav.php' ?>
      <div class="main">
        <div class="topBar">
          <span class="menu">
            <i class="bi bi-list"></i></span>
          <div class="search">
            <label>
              <input type="text" name="" id="" placeholder="Search here">
              <span><i class="bi bi-search"></i></span>
            </label>
          </div>
          <span></span>
        </div>
      
        <div class="content">
          <div class="div border">
          <?php include_once 'database/db.php';

            
            $qry = "SELECT * FROM students";
            $result = $conn->query($qry);   
            if(mysqli_num_rows($result) > 0){
                while($row = $result->fetch_assoc()){
                    $id = $row['ID'];
                    $first = $row["FIRSTNAME"];
                    $last = $row["LASTNAME"];
                    $grade = $row["GRADE"];
                    $section = $row["SECTION"];
                }
            }else{
                echo "no result";
            } 
        
          ?>

          <h4><?php echo $id?></h4>
          <h4><?php echo $first?></h4>
          <h4><?php echo $last?></h4>
          <h4><?php echo $grade?></h4>
          <h4><?php echo $section?></h4>




          </div>

          <div class="div border">
      
          </div>
        </div>

      </div>
    </div>

    <script>
      // hovered script
      let list = document.querySelectorAll('.navigation li');
      function activeLink(){
        list.forEach((item) =>
        item.classList.remove('hovered'));
        this.classList.add('hovered');
      }
      list.forEach((item) =>
      item.addEventListener('mouseover', activeLink));

      //menu toggle
      let toggle = document.querySelector('.menu');
      let nav = document.querySelector('.navigation');
      let main = document.querySelector('.main');

      toggle.onclick = function(){
        nav.classList.toggle('active');
        main.classList.toggle('active');
      }

    </script>
  </body>
</html>