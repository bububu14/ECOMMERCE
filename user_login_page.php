<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<?php include 'includes/header.php'; ?>
<?php

include 'includes/conn.php';

session_start();

error_reporting(0);


if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Woops! Username or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/user_login_style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

	<title>VETnatin - Login</title>
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
		<form action="" method="POST" class="login-email">
			<div class="brand">
				<a style="text-decoration: none; font-size: 2rem; font-weight: 800; color: #111;" href="index.php">VETnatin</a>
			</div>
			<p class="login-text" style="font-size: 1.5rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="user_register_page.php">Register Here</a>.</p>
		</form>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="js/app.js"></script>

</body>

</html>