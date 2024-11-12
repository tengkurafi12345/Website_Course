<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Website Bimbel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Selamat Datang di Dashboard</h1>
        <nav>
            <ul>
                <li><a href="logout.php">Keluar</a></li>
                <li><a href="materi.php">Materi Pembelajaran</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Informasi Kursus</h2>
        <p>Temukan berbagai kursus dan materi yang tersedia di sini.</p>
        <!-- Daftar materi atau kursus bisa ditampilkan di sini -->
    </section>

    <footer>
        <p>&copy; 2024 Website Bimbel</p>
    </footer>
</body>
</html>
