<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'to_do_app';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die('Database connection failed');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if ($user && $password === $user['password']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - OverFlow</title>
  <link rel="stylesheet" href="ofstyles.css" />
</head>
<body>
<header class="login-header">
  <img src="Asset 4.svg" alt="OverFlow Logo" class="header-title-logo">
</header>
<div class="login-container">
  <form class="login-box" action="login.php" method="post">
    <h2>Login</h2>
    <?php if (isset($error)): ?>
      <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <input type="text" name="username" placeholder="Username" required />
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit" class="login-btn">Log In</button>
    <div class="extra">
      <p><a href="#">Forgot Password?</a></p>
    </div>
  </form>
</div>
</body>
</html>