<?php
//syarat untuk mendaftar dengan syarat selanjutnya 
//dengan minumum rata rata nilai adalah 85, jika nilai minimum rata rata terpenuhi maka peserta dinyatakan Diterima
$mtk = 87;
$inggris = 85;
$indonesia = 87;

// Menghitung rata-rata nilai
$rata_rata = ($mtk + $inggris + $indonesia) / 3;

// Menentukan syarat minimum
$nilai_minimum = 85;

// Memeriksa apakah rata-rata memenuhi syarat minimum
if ($rata_rata >= $nilai_minimum) {
    echo "Selamat, peserta diterima dengan rata-rata ".round($rata_rata);
} else {
    echo "Maaf, peserta tidak memenuhi syarat.";
}
