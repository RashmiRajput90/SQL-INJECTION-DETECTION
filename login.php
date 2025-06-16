<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'register');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$error = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prevent SQL injection attempts
    function containsSqlKeywords($input)
    {
        $sqlKeywords = ['SELECT', 'UNION', 'INSERT', 'UPDATE', 'DELETE', '--', '#', '/*', '*/', 'DROP', 'ALTER', 'OR 1=1'];
        foreach ($sqlKeywords as $keyword) {
            if (stripos($input, $keyword) !== false) {
                return true;
            }
        }
        return false;
    }

    if (containsSqlKeywords($username) || containsSqlKeywords($password)) {
        $error = "Suspicious activity detected. Access denied.";
    } else {
        // Use prepared statements to prevent SQL injection
        $stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username;
                header('Location: index.php');
                exit();
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Invalid username or password.";
        }
        $stmt->close();
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<div class="error"><?php echo $error; ?></div>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
