<?php
	include 'index.php';
?>
<link rel="stylesheet" href="styles.css">



<section div="main-container">
	<div class="main-wrapper">
		<h2 id="signUp"></h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="firstname">
			<input type="text" name="last" placeholder="lastname">
			<input type="text" name="email" placeholder="email">
			<input type="text" name="uid" placeholder="username">
			<input type="password" name="pwd" placeholder="password">
			<button type="submit" name="submit">Signup</button>
		</form>
	</div>
</section>



<?php
	include_once 'footer.php';
?>
