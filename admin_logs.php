<?php
session_start();
// Check if the user is logged in as admin
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header('Location: login.php');
    exit();
}

$logFile = 'sql_injection_log.txt';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Logs</title>
</head>
<body>
    <h1>SQL Injection Logs</h1>
    <a href="logout.php">Logout</a>
    <pre>
<?php
if (file_exists($logFile)) {
    echo htmlspecialchars(file_get_contents($logFile));
} else {
    echo "No logs found.";
}
?>
    </pre>
</body>
</html>
