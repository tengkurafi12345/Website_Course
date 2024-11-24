<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Menampilkan informasi pengguna
$conn = new mysqli('localhost', 'root', '', 'zidnan');
$stmt = $conn->prepare("SELECT username FROM users WHERE id = ?");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<h1>Selamat datang, <?php echo $user['username']; ?>!</h1>
<a href="logout.php">Logout</a>

<!-- Konten tambahan untuk pengguna -->
<p>Ini adalah halaman pengguna. Anda dapat menambahkan konten lebih lanjut di sini.</p>