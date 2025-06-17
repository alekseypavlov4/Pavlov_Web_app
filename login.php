<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // УЯЗВИМОСТЬ SQLi
    $query = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";
    $stmt = $pdo->query($query);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['user'] = $user['username'];
        setcookie('logged_in', 'true', time()+3600, '/');
        header("Location: welcome.php");
        exit;
    } else {
        echo "Неверный логин или пароль.";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login</h2>
<form method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>
<a href="register.php">Register</a>
</body>
</html>
