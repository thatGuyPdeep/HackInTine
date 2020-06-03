<?php
	require "header.php";
?>

	<main>
		<div class="wrapper-main">
			<selection class="selection-default">
				<h1>Signup</h1>
				<form accept="includes/signup.inc.php" method="post">
					<input type="text" name="uid" placeholder="username">
					<input type="text" name="mail" placeholder="E-mail">
					<input type="passowrd" name="pwd" placeholder="Password">
					<input type="passowrd" name="pwd-repeat" placeholder="Repeat Password">
					<button type="submit" name="signup-submit">Signup</button>

				</form>
			</selection>
		</div>
	</main>

<?php
	require "footer.php";
?>