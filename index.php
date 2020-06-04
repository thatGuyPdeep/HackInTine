<?php
	require "header.php";
?>

	<main>
		<div class="wrapper-main">
			<selection class="selection-default">
				<?php
					if (isset($_SESSION['userId'])) {
						echo '<p class="login-status">You are logged in!</p>';
					}
					else{
						echo '<p class="login-status">You are logged out!</p>';
					}

				?>
			</selection>
		</div>
	</main>

<?php
	require "footer.php";
?>