<?php

$panjang_tanah = 13;
$lebar_tanah = 9;    

$luas_tanah = $panjang_tanah * $lebar_tanah;


if ($luas_tanah < 90) {
    $kategori_rumah = "Tipe 36";
} elseif ($luas_tanah >= 90 && $luas_tanah <= 95) {
    $kategori_rumah = "Tipe 45";
} elseif ($luas_tanah >= 96 && $luas_tanah <= 120) {
    $kategori_rumah = "Tipe 54";
} elseif ($luas_tanah >= 121 && $luas_tanah <= 150) {
    $kategori_rumah = "Tipe 60";
} else {
    $kategori_rumah = "Tipe 70";
}

echo "Luas tanah: " . $luas_tanah . " m^2" . PHP_EOL;
echo "Kategori rumah yang ingin dibangun Dani: " . $kategori_rumah;
?>
