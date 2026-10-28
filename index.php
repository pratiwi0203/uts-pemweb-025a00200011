<?php
declare(strict_types=1);

require_once 'data.php';
require_once 'functions.php';

$totalMenu = count($menu);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Kantin Kita</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="navbar">
    <div class="container nav-content">
        <a href="index.php" class="brand">Kantin Kita</a>

        <nav>
            <a href="index.php" class="active">Beranda</a>
            <a href="katalog.php">Menu</a>
        </nav>
    </div>
</header>

<main class="container">
    <section class="hero">
        <div class="hero-text">
            <p class="eyebrow">SELAMAT DATANG</p>

            <h1>Menu Enak, Harga Bersahabat!</h1>

            <p>
                Kantin Kita menyediakan berbagai pilihan
                makanan, camilan, dan minuman untuk menemani
                aktivitasmu setiap hari.
            </p>

            <a href="katalog.php" class="btn">
                Lihat Menu
            </a>
        </div>

        <div class="hero-illustration" aria-hidden="true">
            🍛
        </div>
    </section>

    <section class="info-section">
        <h2>Tentang Kantin Kita</h2>

        <p>
            Kantin Kita merupakan kantin sederhana yang
            menawarkan pilihan menu dengan harga terjangkau.
            Website ini membantu pengunjung melihat daftar
            menu dan mengetahui ketersediaannya.
        </p>
    </section>

    <section class="info-grid">
        <article class="info-card">
            <span class="info-icon" aria-hidden="true">🍽️</span>
            <h3>Pilihan Menu</h3>
            <p>
                Tersedia <?= e((string) $totalMenu; ?> pilihan makanan,
                camilan, dan minuman.
            </p>
        </article>

        <article class="info-card">
            <span class="info-icon" aria-hidden="true">🕒</span>
            <h3>Jam Operasional</h3>
            <p>Senin–Sabtu, pukul 08.00–17.00 WIB.</p>
        </article>
    </section>

    <section class="cta">
        <h2>Mau melihat daftar menu?</h2>
        <p>Cek pilihan menu dan harga yang tersedia.</p>
        <a href="katalog.php" class="btn">Buka Katalog</a>
    </section>
</main>

<footer class="footer">
    <p>&copy; 2026 Kantin Kita. Selamat menikmati!</p>
</footer>

</body>
</html>