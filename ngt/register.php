<html>
	<head>
		<title>Form Register</title>
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
				<h3>Register</h3>
			</div>
			<form method="post" action="ceklogin.php" class="login-form">
					<form method="post" action="ceklogin.php">
				<div class="input-container">
					<i class="fa fa-envelope"></i>
					<input type="nisn" class="input" name="NISN" placeholder="NISN"/>
				</div>
				<div class="input-container">
					<i class="fa fa-lock"></i>
					<input type="password"  id="login-password" class="input" name="password" placeholder="Password"/>
					
				</div>
				<div class="rememberme-container">
					<input type="checkbox" name="rememberme" id="rememberme"/>
					<label for="rememberme" class="rememberme"><span>Biarkan tetap masuk</span></label>
					
				</div>
				<a href="content/siswa-tambah.html" class="register">submit</a>
				<a href="login-admin.php" class="register">Login</a>
			</form>
			
		</div>
	</div>
</body>
</html>