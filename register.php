<?php include('server.php'); 
include('scan.php');

$errors = array();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $username = sanitize_input($_POST['username']);
    $email = sanitize_input($_POST['email']);
    $password_1 = sanitize_input($_POST['password_1']);
    $password_2 = sanitize_input($_POST['password_2']);

    // Detect SQL injection
    if (detect_sql_injection($username) || detect_sql_injection($email) || detect_sql_injection($password_1) || detect_sql_injection($password_2)) {
        array_push($errors, "Invalid input detected.");
    }

    // Proceed with registration if no errors
if (count($errors) == 0) {
	// Hash the password
	$password = password_hash($password_1, PASSWORD_DEFAULT);

	// Prepare and bind
	$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $username, $email, $password);

	// Execute the statement
	if ($stmt->execute()) {
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: home.php');
	} else {
		array_push($errors, "Failed to register user.");
	}

	// Close the statement
	$stmt->close();
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>