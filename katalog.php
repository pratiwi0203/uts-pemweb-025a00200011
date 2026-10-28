<?php
declare(strict_types=1);

require_once 'data.php';
require_once 'functions.php';

// Mengambil kategori dari URL jika dipilih.
$kategoriDipilih = $_GET['kategori'] ?? 'Semua';

$daftarKategori = ['Semua', 'Makanan', 'Camilan', 'Minuman'];

if (!in_array($kategoriDipilih, $daftarKategori, true)) {
    $kategoriDipilih = 'Semua';
}

// Menyaring menu sesuai kategori.
$menuDitampilkan = array_filter(
    $menu,
    function (array $item) use ($kategoriDipilih): bool {
        if ($kategoriDipilih === 'Semua') {
            return true;
        }

        return $item['kategori'] === $kategoriDipilih;
    }
);

// Menghitung jumlah dan harga termurah.
$totalMenu = count($menu);
$hargaMenu = array_column($menu, 'harga');
$hargaTermurah = min($hargaMenu);
$jumlahDitampilkan = count($menuDitampilkan);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Kita | Katalog Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>Kantin Kita</h1>
            <p>Temukan menu favoritmu di sini!</p>
        </div>
    </header>

    <nav class="navbar">
        <div class="container">
            <a href="index.php">Beranda</a>
            <a href="katalog.php" class="active">Jelajahi Menu</a>
        </div>
    </nav>

    <main class="container">
        <section class="catalog-intro">
            <h2>Katalog Menu</h2>
            <p>Pilih makanan, camilan, atau minuman sesuai seleramu.</p>
        </section>

        <section class="summary">
            <article class="summary-card">
                <h3>Total Menu</h3>
                <p><?= e((string) $totalMenu); ?> pilihan</p>
            </article>

            <article class="summary-card">
                <h3>Harga Termurah</h3>
                <p><?= e(formatRupiah($hargaTermurah)); ?></p>
            </article>

            <article class="summary-card">
                <h3>Menu Ditampilkan</h3>
                <p><?= e((string) $jumlahDitampilkan); ?> menu</p>
            </article>
        </section>

        <section class="filter-section">
            <h2>Pilih Kategori</h2>

            <div class="filter-links">
                <?php foreach ($daftarKategori as $kategori): ?>
                    <a
                        href="katalog.php?kategori=<?= urlencode($kategori); ?>"
                        class="<?= $kategoriDipilih === $kategori ? 'filter-active' : ''; ?>"
                    >
                        <?= e($kategori); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="catalog-section">
            <h2>
                Menu
                <?= $kategoriDipilih === 'Semua' ? 'Kami' : 'Kategori ' . e($kategoriDipilih); ?>
            </h2>

            <div class="menu-grid">
                <?php if (count($menuDitampilkan) > 0): ?>
                    <?php foreach ($menuDitampilkan as $item): ?>
                        <article class="menu-card">
                            <div class="menu-card-content">
                                <span class="category-label">
                                    <?= e($item['kategori']); ?>
                                </span>

                                <h3><?= e($item['nama']); ?></h3>

                                <p class="menu-price">
                                    <?= e(formatRupiah($item['harga'])); ?>
                                </p>

                                <p>
                                    Tingkat pedas:
                                    <?= e(keteranganPedas($item['pedas'])); ?>
                                </p>

                                <?php if ($item['status'] === 'Tersedia'): ?>
                                    <p class="status available">
                                        <?= e($item['status']); ?>
                                    </p>
                                <?php else: ?>
                                    <p class="status unavailable">
                                        <?= e($item['status']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Belum ada menu pada kategori ini.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2026 Kantin Kita. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>
