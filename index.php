<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Kita | Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>Kantin Kita</h1>
            <p>Tempat makan nyaman dengan menu lezat dan harga bersahabat.</p>
        </div>
    </header>

    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="active">Beranda</a>
            <a href="katalog.php">Jelajahi Menu</a>
        </div>
    </nav>


<section class="hero">
    <div class="hero-layout">

        <div class="hero-content">
            <p class="eyebrow">SELAMAT DATANG DI KANTIN KITA</p>
            <h2>Makan Enak, Harga Bersahabat!</h2>

            <p>
                Kantin Kita menyediakan berbagai pilihan makanan,
                camilan, dan minuman yang cocok dinikmati kapan saja.
                Kami hadir untuk menemani waktu makanmu dengan menu
                yang beragam dan harga yang ramah di kantong.
            </p>

            <a href="katalog.php" class="button">
                Lihat Menu Kami
            </a>
        </div>

        <div class="hero-image">
            <img src="assets/kantin.jpeg" alt="Suasana Kantin Kita">
        </div>

    </div>
</section>


        <section class="about">
            <h2>Tentang Kantin Kita</h2>
            <p>
                Kantin Kita merupakan kantin umum yang menyediakan
                berbagai pilihan makanan dan minuman untuk memenuhi
                kebutuhan makan sehari-hari. Kami ingin memberikan
                pengalaman makan yang praktis, nyaman, dan terjangkau.
            </p>
        </section>

        <section class="info-section">
            <h2>Informasi Kantin</h2>

            <div class="info-grid">
                <article class="info-card">
                    <h3>Jam Operasional</h3>
                    <p>Setiap hari</p>
                    <p>08.00–16.00 WIB</p>
                </article>

                <article class="info-card">
                    <h3>Pilihan Menu</h3>
                    <p>Makanan, camilan, dan minuman</p>
                </article>

                <article class="info-card">
                    <h3>Harga Bersahabat</h3>
                    <p>Beragam pilihan sesuai kebutuhanmu.</p>
                </article>
            </div>
        </section>

        <section class="cta">
            <h2>Temukan Menu Favoritmu!</h2>
            <p>Lihat berbagai pilihan menu yang tersedia di Kantin Kita.</p>
            <a href="katalog.php" class="button">
                Jelajahi Menu
            </a>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2026 Kantin Kita. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>
