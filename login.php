<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "salah"){
			echo "<script>alert('Username atau Password anda salah')</script>";
		}
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="login.css">

	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<div class="login">
		<form action="ceklog.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="text" placeholder="username" name="username" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  required>
			</div>
			<div class="input-group">
				<button name="submit" class="anjay">Login</button>
			</div>
		</form>
	</div>
</div>
</body>
</html>