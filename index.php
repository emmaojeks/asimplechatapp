<?php
	session_start();
	if (isset($_SESSION['unique_id'])) { // if user is logged in
		header("location: user.php");
	}
?>
<?php include_once 'header.php'; ?>
<body>
	<div class="wrapper">
		<section class="form signup">
			<header>Realtime Chat App</header>
			<form action="#" enctype="multipart/form-data">
				<div class="error-txt"></div>
				<div class="name-details">
					<div class="field input">
						<label>First Name</label>
						<input type="text" placeholder="First Name" name="fname" required>
					</div>
					<div class="field input">
						<label>Last Name</label>
						<input type="text" placeholder="Last Name" name="lname" required>
					</div>
				</div>
				<div class="field input">
					<label>Email Address</label>
					<input type="text" placeholder="Enter your email" name="email" required>
				</div>
				<div class="field input">
					<label>Password</label> 
					<input type="password" placeholder="Enter new password" name="password" required>
					<i class="fas fa-eye"></i>
				</div>
				<div class="field image">
					<label>Select Image</label>
					<input type="file" name="image" required>
				</div>
				<div class="field button">
					<input type="submit" value="Continue to chat" name="">
				</div>
			</form>
			<div class="field">
				<div class="link">Already signed up? <a href="login.php">Login now</a></div>
			</div>
		</section>
	</div>
</body>
<script type="text/javascript" src="js/pass-show-hide.js"></script>
<script type="text/javascript" src="js/signup.js"></script>
</html>