<!--?php include_once("login.php") ?-->
<?php
include ('server.php');
session_start();
		if (isset($_POST['Login'])) {
			$username = $_POST['email'];
			$password = $_POST['password'];
			$password = md5($password);
		    $qry = "SELECT * FROM user_table WHERE `email` = '$email' AND `password`='$password';";
			$sql = mysqli_query($db,$qry);
			if(mysqli_num_rows($sql)>0) {
    			$row=mysqli_fetch_assoc($sql);
    			//$_SESSION['uid'] = $row['uid']; 
    			$_SESSION['email'] = $row['email'];
    			$_SESSION['password'] = $row['password'];
                
                $_SESSION['success'] = "You are now logged in";
        		header('location:index.php');
        	}
		}
?>
<!DOCTYPE>
<html>
<head>
	<title>Registration From</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="">
		<div class="input_group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Your email">
		</div>
		<div class="input_group">
			<label>Password</label>
			<input type="password" name="password" placeholder="Your password">
		</div>
		<div class="input_group">
			<button type="submit" name="Login" class="btn">Login</button>
		</div>
		<p>
			Not yet registered? <a href="register.php">Sign up</a>
		</p><br>
		<button >
			<a href="index.php" style="color: blue">Home</a>
		</button>
	</form>
</body>
</html>
