<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../styles/global.css">
  <link rel="stylesheet" href="../styles/login-style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>Login</title>
</head>
<body>
<img class="wave" src="assets/images/wave.jpg">
	<div class="container">
		<div class="img">
			<img src="assets/images/logo.png">
		</div>
		<div class="login-content">
			<div class="form-container">
					<div class="login-logo">
						<img src="assets/images/enter.png" alt="" width="35" height="35" >
						<h2>Login</h2>
					</div>
					
					<h2 class="title">Guidance Counseling</h2>
					<br>
					<?php if(isset($_GET['error'])){ ?>
						<div class="alert" role="alert">
							<?=$_GET['error']?>
						</div>
					<?php }?>
					<br>
						<form method="POST">
						<div class="input-div one">
								<div class="i">
									<i class="fas fa-user"></i>
								</div>
								<div class="div">
									<h5>Username</h5>
									<input name="loginName" type="text" class="input" required>
								</div>
						</div>
						<div class="input-div pass">
								<div class="i"> 
									<i class="fas fa-lock"></i>
								</div>
								<div class="div">
									<h5>Password</h5>
									<input name="loginPass" type="password" class="input" required>
								</div>
						</div>
						<input type="submit" class="btn" value="Login">
						</form>
						</div>
      </div>
    </div>
		<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script type="text/javascript" src="scripts/login-script.js"></script>
</body>
</html>