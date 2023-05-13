<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/login-style.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

  <title>Login</title>
</head>
<body>
<img class="wave" src="assets/images/wave.jpg">
	<div class="container">
		<div class="img">
			<img src="assets/images/logo.png">
		</div>
		<div class="login-content">
			<form method="POST">
				<div class="login-logo">
					<img src="assets/images/enter.png" alt="" width="35" height="35" >
					<h2>Login</h2>
				</div>
				
				<h2 class="title">Guidance Counseling</h2>
					<div class="input-div one">
							<div class="i">
								<i class="fas fa-user"></i>
							</div>
							<div class="div">
								<h5>Username</h5>
								<input type="text" class="input">
							</div>
					</div>
					<div class="input-div pass">
							<div class="i"> 
								<i class="fas fa-lock"></i>
							</div>
							<div class="div">
								<h5>Password</h5>
								<input type="password" class="input">
							</div>
					</div>
					<input type="submit" class="btn" value="Login">
				</form>
        </div>
    </div>
    <script type="text/javascript" src="scripts/login-script.js"></script>
</body>
</html>