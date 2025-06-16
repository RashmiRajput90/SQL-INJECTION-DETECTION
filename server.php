<?php
session_start();

// Initialize variables
$username = "";
$email = "";
$errors = array();

// Database connection using PDO
try {
    $db = new PDO('mysql:host=localhost;dbname=register;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // Get input and sanitize
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password_1 = htmlspecialchars(trim($_POST['password_1']));
    $password_2 = htmlspecialchars(trim($_POST['password_2']));

    // Form validation
    if (empty($username)) array_push($errors, "Username is required");
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) array_push($errors, "Valid email is required");
    if (empty($password_1)) array_push($errors, "Password is required");
    if ($password_1 !== $password_2) array_push($errors, "Passwords do not match");

    // Check if user already exists
    if (count($errors) === 0) {
        $stmt = $db->prepare("SELECT * FROM users WHERE username = :username OR email = :email LIMIT 1");
        $stmt->execute(['username' => $username, 'email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if ($user['username'] === $username) array_push($errors, "Username already exists");
            if ($user['email'] === $email) array_push($errors, "Email already exists");
        }
    }

    // Register user if no errors
    if (count($errors) === 0) {
        $hashed_password = password_hash($password_1, PASSWORD_DEFAULT);

        $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        if ($stmt->execute([
            'username' => $username,
            'email' => $email,
            'password' => $hashed_password
        ])) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('Location: home.php');
            exit();
        } else {
            array_push($errors, "Registration failed. Please try again later.");
        }
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    // Get and sanitize inputs
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (empty($username)) array_push($errors, "Username is required");
    if (empty($password)) array_push($errors, "Password is required");

    if (count($errors) === 0) {
        $stmt = $db->prepare("SELECT * FROM userss WHERE username = :username LIMIT 1");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['success'] = "You are now logged in";
            header('Location: home.php');
            exit();
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>
