<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header>
		<nav>
			<a href="#">
				<img src="img/logo.png" alt="logo">
			</a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Search</a></li>
				<li><a href="#">Help</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<div class="header-login">
				<?php
					if (isset($_SESSION['userId'])) {
						echo '<form action="includes/logout.inc.php" method="post">
							 <button type="submit" name="logout-submit">Logout</button>
						</form>';
					}
					else{
						echo '<form action="includes/login.inc.php" method="post">
							<input type="text" name="mailuid" placeholder="Usernamr/E-mail...">
							<input type="password" name="pwd" placeholder="Password...">
							<button type="submit" name="login-submit">Login</button>
						</form>
						<a href="signup.php">Signup</a>';
					}
				?>
				
				
			</div>
		</nav>
		</nav>
	</header>
</body>
</html>