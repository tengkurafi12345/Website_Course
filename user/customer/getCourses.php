<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_bimbel"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Kursus - Bimbel</title>
    <link rel="stylesheet" href="css/getCourses.css">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="getCourses.php">Paket Kursus</a></li>
                <li><a href="contact.php">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- Daftar Paket Unggulan -->
<section class="featured-courses">
    <h2>Paket Kursus Unggulan</h2>
    <div class="featured-package">
        <img src="img/matematika.jpg" alt="Paket Matematika Dasar">
        <h3>Paket Matematika Dasar</h3>
        <p>Untuk siswa SD - SMP</p>
        <p>Harga: Rp300.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Matematika Dasar')">Daftar</button>
    </div>
    <div class="featured-package">
        <img src="img/inggris.jpg" alt="Paket Bahasa Inggris">
        <h3>Paket Bahasa Inggris</h3>
        <p>Untuk semua tingkat</p>
        <p>Harga: Rp400.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Bahasa Inggris')">Daftar</button>
    </div>
    <div class="featured-package">
        <img src="img/bahasarab.jpg" alt="Paket Bahasa Arab">
        <h3>Paket Bahasa Arab</h3>
        <p>Untuk semua tingkat</p>
        <p>Harga: Rp350.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Bahasa Arab')">Daftar</button>
    </div>
</section>

<!-- Daftar Paket Bimbel -->
<section class="course-container">
    <article class="course-package">
        <img src="img/matematika.jpg" alt="Paket Matematika Dasar">
        <h2>Paket Matematika Dasar</h2>
        <p>Untuk siswa SD - SMP</p>
        <p>Harga: Rp300.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Matematika Dasar')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/fisika.jpg" alt="Paket Fisika SMA">
        <h2>Paket Fisika SMA</h2>
        <p>Untuk siswa SMA</p>
        <p>Harga: Rp350.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Fisika SMA')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/inggris.jpg" alt="Paket Bahasa Inggris">
        <h2>Paket Bahasa Inggris</h2>
        <p>Untuk semua tingkat</p>
        <p>Harga: Rp400.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Bahasa Inggris')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/ipa.jpg" alt="Paket IPA">
        <h2>Paket IPA</h2>
        <p>Untuk siswa SD - SMA</p>
        <p>Harga: Rp350.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket IPA')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/ips.jpg" alt="Paket IPS">
        <h2>Paket IPS</h2>
        <p>Untuk siswa SD - SMA</p>
        <p>Harga: Rp350.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket IPS')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/programer.jpg" alt="Paket Programer">
        <h2>Paket Programer</h2>
        <p>Untuk siswa SMA dan mahasiswa</p>
        <p>Harga: Rp450.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Programer')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/itdasar.jpg" alt="Paket IT Dasar">
        <h2>Paket IT Dasar</h2>
        <p>Untuk siswa SMA dan mahasiswa</p>
        <p>Harga: Rp400.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket IT Dasar')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/bahasaindonesia.jpg" alt="Paket Bahasa Indonesia">
        <h2>Paket Bahasa Indonesia</h2>
        <p>Untuk semua tingkat</p>
        <p>Harga: Rp300.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Bahasa Indonesia')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/bahasarab.jpg" alt="Paket Bahasa Arab">
        <h2>Paket Bahasa Arab</h2>
        <p>Untuk semua tingkat</p>
        <p>Harga: Rp350.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Bahasa Arab')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/alquran_tajwid.jpg" alt="Paket Al-Qur'an & Tajwid">
        <h2>Paket Al-Qur'an & Tajwid</h2>
        <p>Untuk semua tingkat</p>
        <p>Harga: Rp400.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Al-Qur\'an & Tajwid')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/aqidah_akhlaq.jpg" alt="Paket Aqidah & Akhlaq">
        <h2>Paket Aqidah & Akhlaq</h2>
        <p>Untuk semua tingkat</p>
        <p>Harga: Rp350.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Aqidah & Akhlaq')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/hadits.jpg" alt="Paket Hadits">
        <h2>Paket Hadits</h2>
        <p>Untuk semua tingkat</p>
        <p>Harga: Rp350.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Hadits')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/tafsir.jpg" alt="Paket Tafsir">
        <h2>Paket Tafsir</h2>
        <p>Untuk semua tingkat</p>
        <p>Harga: Rp350.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Tafsir')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/tafsir.jpg" alt="Paket Tahfidz">
        <h2>Paket Tahfidz</h2>
        <p>Untuk semua tingkat</p>
        <p>Harga: Rp350.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Tahfidz')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/tafsir.jpg" alt="Paket Biologi">
        <h2>Paket Biologi</h2>
        <p>Untuk semua tingkat</p>
        <p>Harga: Rp350.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Biologi')">Daftar</button>
    </article>
    <article class="course-package">
        <img src="img/tafsir.jpg" alt="Paket Kimia">
        <h2>Paket Kimia</h2>
        <p>Untuk semua tingkat</p>
        <p>Harga: Rp350.000/bulan</p>
        <button onclick="redirectToWhatsApp('Paket Kimia')">Daftar</button>
    </article>
</section>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Bimbel Online</p>
        <p><a href="privacy.php">Kebijakan Privasi</a> | <a href="terms.php">Syarat dan Ketentuan</a></p>
    </footer>

    <!-- Script untuk redirect ke WhatsApp -->
    <script>
        function redirectToWhatsApp(courseName) {
            const waNumber = "6281234567890"; // Ganti dengan nomor WhatsApp admin
            const message = `Saya tertarik dengan ${courseName}, mohon informasi lebih lanjut.`;
            const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;
            window.location.href = waUrl;
        }
    </script>
</body>
</html>


<?php
$conn->close();
?>
