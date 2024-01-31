<?php
$hari = date('D');
$totalHarga = 0;

// Harga masing-masing menu
$harga_nasi_kebuli = 25000;
$harga_ayam_bakar = 20000;
$harga_nasi_goreng = 15000;

// Pesanan masing-masing menu
$pesanan_nasi_kebuli = 2;
$pesanan_ayam_bakar = 1;
$pesanan_nasi_goreng = 2;

// Menghitung total harga untuk setiap pesanan
$totalHarga += $harga_nasi_kebuli * $pesanan_nasi_kebuli;
$totalHarga += $harga_ayam_bakar * $pesanan_ayam_bakar;
$totalHarga += $harga_nasi_goreng * $pesanan_nasi_goreng;

// Mengurangkan diskon jika hari Jumat atau Senin
if ($hari == 'Friday') { 
    $totalHarga -= $totalHarga * 0.05; 
} elseif ($hari == 'Monday') { 
    $totalHarga -= $totalHarga * 0.02; 
}

echo "Total harga yang harus dibayar oleh Dani adalah: Rp " . number_format($totalHarga, 2);
?>
