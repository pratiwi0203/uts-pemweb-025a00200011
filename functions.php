<?php
declare(strict_types=1);

function e(string $teks): string
{
    return htmlspecialchars(
        $teks,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}

function formatRupiah(int $angka): string
{
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function statusMenu(bool $tersedia): string
{
    if ($tersedia) {
        return 'Tersedia';
    }

    return 'Habis';
}

function hitungMenuTersedia(array $menu): int
{
    $hasil = array_filter(
        $menu,
        fn(array $item): bool => $item['tersedia']
    );

    return count($hasil);
}

function cariHargaTermurah(array $menu): int
{
    $daftarHarga = array_column($menu, 'harga');

    return min($daftarHarga);
}

function hitungJumlahKategori(
    array $menu,
    string $kategori
): int {
    $hasil = array_filter(
        $menu,
        fn(array $item): bool =>
            $item['kategori'] === $kategori
    );

    return count($hasil);
}