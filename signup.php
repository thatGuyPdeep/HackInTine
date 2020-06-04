<?php
	require "header.php";
?>

	<main>
		<div class="wrapper-main">
			<selection class="selection-default">
				<h1>Signup</h1>
				<?php 
					if (isset($_GET['error'])) {
						if ($_GET["error"] == "emptyfeilds") {
							echo '<p class="signuperror">Fill in all fields!</p>';
						}
						else if($_GET["error"] == "invalidmailuid"){
							echo '<p class="signuperror">Mail ID does not exist.</p>';
						}
					}
					else if($_GET["signup"] == "success"){
						echo '<p class="signupsuccess">Signup successful!</p>';
					}
				?>
				<form class="form-signup" action="includes/signup.inc.php" method="post">
					<input type="text" name="uid" placeholder="Username">
					<input type="text" name="mail" placeholder="E-mail">
					<input type="password" name="pwd" placeholder="Password">
					<input type="password" name="pwd-repeat" placeholder="Repeat Password">
					<button type="submit" name="signup-submit">Signup</button>

				</form>
			</selection>
		</div>
	</main>

<?php
	require "footer.php";
?>