<?php
declare(strict_types=1);

require_once 'data.php';
require_once 'functions.php';

$totalMenu = count($menu);
$menuTersedia = hitungMenuTersedia($menu);
$hargaTermurah = cariHargaTermurah($menu);
$jumlahMakanan = hitungJumlahKategori($menu, 'Makanan');
$jumlahMinuman = hitungJumlahKategori($menu, 'Minuman');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Menu | Kantin Kita</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="navbar">
    <div class="container nav-content">
        <a href="index.php" class="brand">Kantin Kita</a>

        <nav>
            <a href="index.php">Beranda</a>
            <a href="katalog.php" class="active">Menu</a>
        </nav>
    </div>
</header>

<main class="container">

    <section class="menu-hero">
        <p class="eyebrow">MENU KANTIN</p>

        <h1>Temukan Menu Favoritmu</h1>

        <p>
            Pilihan makanan, camilan, dan minuman
            dengan harga yang ramah di kantong.
        </p>
    </section>

    <section class="ringkasan">
        <article class="summary-item">
            <span>Total Menu</span>
            <strong><?= $totalMenu; ?></strong>
        </article>

        <article class="summary-item">
            <span>Menu Tersedia</span>
            <strong><?= $menuTersedia; ?></strong>
        </article>

        <article class="summary-item">
            <span>Harga Termurah</span>
            <strong><?= e(formatRupiah($hargaTermurah)); ?></strong>
        </article>
    </section>

    <section class="daftar-menu">
        <div class="section-heading">
            <h2>Daftar Menu</h2>
            <p>
                Ada <?= $jumlahMakanan; ?> menu makanan dan
                <?= $jumlahMinuman; ?> menu minuman.
            </p>
        </div>

        <div class="menu-grid">

            <?php foreach ($menu as $item): ?>
                <article class="menu-card">

                    <div class="menu-icon" aria-hidden="true">
                        <?php if ($item['kategori'] === 'Makanan'): ?>
                            🍛
                        <?php elseif ($item['kategori'] === 'Minuman'): ?>
                            🥤
                        <?php else: ?>
                            🍟
                        <?php endif; ?>
                    </div>

                    <div class="menu-info">
                        <span class="kategori">
                            <?= e($item['kategori']); ?>
                        </span>

                        <h3><?= e($item['nama']); ?></h3>

                        <p class="keterangan">
                            <?= $item['pedas']
                                ? '🌶️ Pedas'
                                : 'Tidak pedas'; ?>
                        </p>

                        <div class="menu-footer">
                            <strong class="harga">
                                <?= e(formatRupiah($item['harga'])); ?>
                            </strong>

                            <?php if ($item['tersedia']): ?>
                                <span class="status tersedia">
                                    <?= e(statusMenu(true)); ?>
                                </span>
                            <?php else: ?>
                                <span class="status habis">
                                    <?= e(statusMenu(false)); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                </article>
            <?php endforeach; ?>

        </div>
    </section>

</main>

<footer class="footer">
    <p>&copy; 2026 Kantin Kita. Selamat menikmati!</p>
</footer>

</body>
</html>