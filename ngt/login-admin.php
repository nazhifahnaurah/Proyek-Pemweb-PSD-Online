<html>
	<head>
		<title>Form Login</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="img/logo.jpg"/>
		<link rel="stylesheet" href="css/menu.css"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/font.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
<body>
	
	<div class="background"></div>
	<div class="backdrop"></div>
	<div class="login-form-container" id="login-form">
		<div class="login-form-content">
			<div class="login-form-header">
				<div class="logo">
					<img src="img/logo.jpg"/>
				</div>
				<h3>Login</h3>
			</div>

			<form method="post" action="cekloginadmin.php" class="login-form">
				<div class="input-container">
					<i class="fa fa-envelope"></i>
					<input type="username" class="input" name="username" placeholder="Username"/>
				</div>
				<div class="input-container">
					<i class="fa fa-lock"></i>
					<input type="password"  id="login-password" class="input" name="password" placeholder="Password"/>
					
				</div>
				<div class="rememberme-container">
					<input type="checkbox" name="rememberme" id="rememberme"/>
					<label for="rememberme" class="rememberme"><span>Biarkan tetap masuk</span></label>
					
				</div>
				<input type="submit" name="login" value="submit" class="button"/>
				<a href="register.php" class="register">Register</a>
			</form>
			
		</div>
	</div>
</body>
</html>