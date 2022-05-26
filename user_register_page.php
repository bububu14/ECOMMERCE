<?php

include 'includes/conn.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$sql2 = "SELECT * FROM users WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		$result2 = mysqli_query($conn, $sql2);
		if (!$result->num_rows > 0) {
			if (!$result2->num_rows > 0) {
				$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
				$result = mysqli_query($conn, $sql);
				if ($result) {
					echo "<script>alert('Wow! User Registration Completed.')</script>";
					$username = "";
					$email = "";
					$_POST['password'] = "";
					$_POST['cpassword'] = "";
				} else {
					echo "<script>alert('Woops! Something went wrong.')</script>";
				}
			} else {
				echo "<script>alert('Woops! Username Already Exists.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="/user_login_style.css">

	<title>VETnatin - Register</title>
</head>

<body>
	<div>
		<!-- create the paw prints from styled, empty divs -->

		<div class="paw-print-1">
			<div class="pad large"></div>
			<div class="pad small-1"></div>
			<div class="pad small-2"></div>
			<div class="pad small-3"></div>
			<div class="pad small-4"></div>
		</div>

		<div class="paw-print-2">
			<div class="pad large"></div>
			<div class="pad small-1"></div>
			<div class="pad small-2"></div>
			<div class="pad small-3"></div>
			<div class="pad small-4"></div>
		</div>

		<div class="paw-print-3">
			<div class="pad large"></div>
			<div class="pad small-1"></div>
			<div class="pad small-2"></div>
			<div class="pad small-3"></div>
			<div class="pad small-4"></div>
		</div>

		<div class="paw-print-4">
			<div class="pad large"></div>
			<div class="pad small-1"></div>
			<div class="pad small-2"></div>
			<div class="pad small-3"></div>
			<div class="pad small-4"></div>
		</div>

		<div class="paw-print-5">
			<div class="pad large"></div>
			<div class="pad small-1"></div>
			<div class="pad small-2"></div>
			<div class="pad small-3"></div>
			<div class="pad small-4"></div>
		</div>

		<div class="paw-print-6">
			<div class="pad large"></div>
			<div class="pad small-1"></div>
			<div class="pad small-2"></div>
			<div class="pad small-3"></div>
			<div class="pad small-4"></div>
		</div>

	</div>

	<div class="container">
		<form action="" method="POST" class="login-email" autocomplete="off" enctype="multipart/form-data">
			<div class="brand">
				<a style="text-decoration: none; font-size: 2rem; font-weight: 800; color: #111;" href="index.php">VETnatin</a>
			</div>
			<p class="login-text" style="font-size: 1.5rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="user_login_page.php">Login Here</a>.</p>
		</form>
	</div>
</body>

</html>