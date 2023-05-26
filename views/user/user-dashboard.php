<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/dashboard-style.css">
  <link rel="stylesheet" href="styles/admin-style.css">
  <link rel="stylesheet" href="styles/user-dashboard-style.css">

</head>
  <body>

    <section class="modal-container">
    <?php include_once('controllers/user/user-modal.php') ?>
    </section>
    
    <div class="container">
      <?php include_once 'components/nav.php' ?>
      <div class="main">
        <?php include_once 'components/topBar.php'?>
        <div class="header">
          <h2 class="title"><?php echo $heading?></h2>
          <span><i class="bi bi-bell"></i></span>
        </div>
        <h3>Recents</h3>
        <div class="div content">
          <div class="request">
            <h3>01</h3>-
            <h3>001</h3>-
            <h3>26/05/2023</h3>-
            <h3>From: Teacher Wency Trapago</h3>-
            <h3>Status: Pending</h3>
            <button id="view" class="btn">View</button>
          </div>
          <div class="request">
            <h3>02</h3>-
            <h3>001</h3>-
            <h3>26/05/2023</h3>-
            <h3>From: Teacher BJay Bravo</h3>-
            <h3>Status: Ongoing</h3>
            <button id="view" class="btn">View</button>
          </div>
        </div>

      </div>
    </div>

    <script type="text/javascript" src="scripts/nav-script.js">
    </script>
    <script src="scripts/modal-user.js"></script>
  </body>
</html>