<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zidnan Bimbel menawarkan paket bimbel terbaik untuk Matematika, Fisika, dan Bahasa Inggris. Gabung sekarang!">
    <meta name="keywords" content="Bimbel, Kursus, Matematika, Fisika, Bahasa Inggris, Pendidikan, Zidnan">
    <meta name="author" content="Zidnan Course">
    <title>Zidnan Bimbel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="getCourses.php">Paket Kursus</a>
        <a href="siswa.php">Siswa</a>
        <a href="guru.php">Guru</a>
        <a href="blog.php">Blog</a>
        <a href="testimonial.php">Testimonial</a>
        <a href="buku-media.php">Buku & Media</a>
    </nav>

    <!-- Header -->
    <header>
        <h1>Selamat Datang di Zidnan Bimbel</h1>
        <p>Temukan paket bimbel terbaik sesuai kebutuhan Anda</p>
    </header>

    <!-- Konten Utama -->
    <main class="container" id="home">
        <h1>Paket Bimbel Kami</h1>
        <p>Pilih paket bimbel yang sesuai dan klik daftar untuk memulai proses pendaftaran.</p>

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
</section>


        <section class="course-container2">
            <article class="course-package2">
                <img src="img/matematika.jpg" alt="Paket Matematika Dasar">
                <h3>Keunggulan Paket Matematika Dasar</h3>
                <h4><b>Keunggulan Paket:</b></h4>
                <ul>
                    <li><b>* Materi Terstruktur: Pembahasan konsep dasar hingga soal latihan yang disusun sistematis, memudahkan siswa memahami Matematika secara bertahap.</b></li>
                    <li><b>* Tutor Berpengalaman: Didukung oleh pengajar profesional yang siap membantu menjawab setiap pertanyaan.</b></li>
                    <li><b>* Latihan Soal Intensif: Tersedia soal dan kuis yang bervariasi untuk meningkatkan pemahaman dan kemampuan siswa.</b></li>
                    <li><b>* Metode Belajar Interaktif: Kelas yang didesain untuk mengajak siswa aktif dan menyukai Matematika.</b></li>
                </ul>
                <p><b>Yuk, gabung sekarang dan buat Matematika lebih mudah!</b></p>
            </article>

            <article class="course-package2">
                <img src="img/fisika.jpg" alt="Paket Fisika SMA">
                <h3>Keunggulan Paket Fisika SMA</h3>
                <h4><b>Keunggulan Paket:</b></h4>
                <ul>
                    <li><b>* Materi Terstruktur: Pembahasan konsep dasar hingga soal latihan yang disusun sistematis, memudahkan siswa memahami Fisika secara bertahap.</b></li>
                    <li><b>* Tutor Berpengalaman: Didukung oleh pengajar profesional yang siap membantu menjawab setiap pertanyaan.</b></li>
                    <li><b>* Latihan Soal Intensif: Tersedia soal dan kuis yang bervariasi untuk meningkatkan pemahaman dan kemampuan siswa.</b></li>
                    <li><b>* Metode Belajar Interaktif: Kelas yang didesain untuk mengajak siswa aktif dan menyukai Fisika.</b></li>
                </ul>
                <p><b>Yuk, gabung sekarang dan buat Fisika lebih mudah!</b></p>
            </article>

            <article class="course-package2">
                <img src="img/inggris.jpg" alt="Paket Bahasa Inggris">
                <h3>Keunggulan Paket Bahasa Inggris</h3>
                <h4><b>Keunggulan Paket:</b></h4>
                <ul>
                    <li><b>* Materi Terstruktur: Pembahasan konsep dasar hingga soal latihan yang disusun sistematis, memudahkan siswa memahami Bahasa Inggris secara bertahap.</b></li>
                    <li><b>* Tutor Berpengalaman: Didukung oleh pengajar profesional yang siap membantu menjawab setiap pertanyaan.</b></li>
                    <li><b>* Latihan Soal Intensif: Tersedia soal dan kuis yang bervariasi untuk meningkatkan pemahaman dan kemampuan siswa.</b></li>
                    <li><b>* Metode Belajar Interaktif: Kelas yang didesain untuk mengajak siswa aktif dan menyukai Bahasa Inggris.</b></li>
                </ul>
                <p><b>Yuk, gabung sekarang dan buat Bahasa Inggris lebih mudah!</b></p>
            </article>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; Rumah Tahfidz @ 2024 by Zidnan_Course. | All rights reserved!</p>
        <p>
            <a href="https://facebook.com/zidnanbimbel" target="_blank">
                <i class="fab fa-facebook" style="font-size: 30px; margin-right: 10px;"></i>
            </a>
            <a href="https://instagram.com/zidnanbimbel" target="_blank">
                <i class="fab fa-instagram" style="font-size: 30px; margin-right: 10px;"></i>
            </a>
            <a href="https://twitter.com/zidnanbimbel" target="_blank">
                <i class="fab fa-twitter" style="font-size: 30px; margin-right: 10px;"></i>
            </a>
            <a href="#kontak">
                <i class="fas fa-envelope" style="font-size: 30px;"></i>
            </a>
        </p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>
