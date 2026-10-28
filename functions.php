<?php
declare(strict_types=1);

/**
 * Mengamankan teks sebelum ditampilkan ke halaman HTML.
 */
function e(string $teks): string
{
    return htmlspecialchars(
        $teks,
        ENT_QUOTES,
        'UTF-8'
    );
}

/**
 * Mengubah angka harga menjadi format Rupiah.
 */
function formatRupiah(int $harga): string
{
    return 'Rp' . number_format(
        $harga,
        0,
        ',',
        '.'
    );
}

/**
 * Mengubah status menu menjadi keterangan yang mudah dibaca.
 */
function keteranganPedas(bool $pedas): string
{
    if ($pedas) {
        return 'Pedas';
    }

    return 'Tidak Pedas';
}
