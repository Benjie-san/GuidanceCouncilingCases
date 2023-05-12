<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/dashboard-style.css">
</head>
  <body>
    <div class="container">
      <?php include_once 'components/nav.php' ?>
      <div class="main">
        <?php include_once 'components/topBar.php'?>
        <div class="header">
          <h2 class="title"><?php echo $heading?></h2>
          <span></span>
        </div>
        <div class="content">
        
          <div class="div border">
      
          </div>
        </div>

      </div>
    </div>

    <script type="text/javascript" src="scripts/nav-script.js">

    </script>
  </body>
</html>