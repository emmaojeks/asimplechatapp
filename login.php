<?php
	session_start();
	if (isset($_SESSION['unique_id'])) { // if user is logged in
		header("location: user.php");
	}
?>
<?php include_once 'header.php'; ?>
<body>
	<div class="wrapper">
		<section class="form login">
			<header>Realtime Chat App</header>
			<form action="#">
				<div class="error-txt"></div>
				<div class="field input">
					<label>Email Address</label>
					<input type="text" placeholder="Enter your email" name="email">
				</div>
				<div class="field input">
					<label>Password</label> 
					<input type="password" placeholder="Enter new password" name="password">
					<i class="fas fa-eye"></i>
				</div>
				<div class="field button">
					<input type="submit" value="Continue to chat" name="">
				</div>
			</form>
			<div class="field">
				<div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
			</div>
		</section>
	</div>
</body>
<script type="text/javascript" src="js/pass-show-hide.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</html>