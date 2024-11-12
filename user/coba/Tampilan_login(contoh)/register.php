<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];

    // Menyimpan data ke database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Website Bimbel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Daftar Akun</h1>
    </header>

    <form action="register.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" required><br>
        <label for="email">Email</label>
        <input type="email" name="email" required><br>
        <label for="password">Password</label>
        <input type="password" name="password" required><br>
        <button type="submit">Daftar</button>
    </form>

    <footer>
        <p>&copy; 2024 Website Bimbel</p>
    </footer>
</body>
</html>
