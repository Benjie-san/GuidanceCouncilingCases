<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="styles/global.css">
<link rel="stylesheet" href="styles/nav-style.css" class="css">
<div class="navigation">
  <ul>
    <li>
      <a href="#">
        <span class="sprcnhs"><img src="assets/images/logo.png" alt=""></span>
        <span class="title">Guidance Counseling</span>
      </a>
    </li>
    <?php if($_SESSION["role"] == "ADMIN"){ ?>
    <li>
      <a href="/adminDashboard" class=""><span class="icon"><i class="bi bi-columns-gap"></i></span>
      <span class="title">Dashboard</span></a>
    </li>
    <?php  } ?>

    <?php if($_SESSION["role"] == "TEACHER" || $_SESSION["role"] == "STUDENT"){ ?>
    <li>
      <a href="/user-dashboard" class=""><span class="icon"><i class="bi bi-columns-gap"></i></span>
      <span class="title">Dashboard</span></a>
    </li>
    <?php  } ?>

    <?php if($_SESSION["role"] == "TEACHER" || $_SESSION["role"] == "ADMIN"){ ?>
    <li>
      <a href="/students"><span class="icon"><i class="bi bi-person-lines-fill"></i></span>
      <span class="title">List of Students</span></a>
    </li>
    <?php  } ?>

    <?php if($_SESSION["role"] == "TEACHER" || $_SESSION["role"] == "STUDENT" || $_SESSION["role"] == "ADMIN"){ ?>
      <li>
      <a href="/guidance"><span class="icon"><i class="bi bi-folder2-open"></i></span>
      <span class="title">Guidance Service</span></a>
    </li>
    <?php  } ?>
    

    <?php if($_SESSION["role"] == "ADMIN"){ ?>
    <li>
      <a href="/cases"><span class="icon"><i class="bi bi-archive-fill"></i></span>
      <span class="title">Guidance Records</span></a>
    </li>
    <?php  } ?>


    <?php if($_SESSION["role"] == "ADMIN"){ ?>
    <li>
      <a href="/accounts"><span class="icon"><i class="bi bi-people-fill"></i></span>
      <span class="title">Accounts</span></a>
    </li>
    <?php  } ?>
  </ul>
</div>