<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: dashboard.php");
    } else {
        echo "Username atau password salah.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Website Bimbel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Masuk ke Akun</h1>
    </header>

    <form action="login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" required><br>
        <label for="password">Password</label>
        <input type="password" name="password" required><br>
        <button type="submit">Masuk</button>
    </form>

    <footer>
        <p>&copy; 2024 Website Bimbel</p>
    </footer>
</body>
</html>
