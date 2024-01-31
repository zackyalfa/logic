<?php
$angka1 = 10;
$angka2 = 3;

// Melakukan perhitungan bagi
$hasilBagi = $angka1 / $angka2;

// Memeriksa apakah hasil bagi menghasilkan desimal
if (is_float($hasilBagi) || is_double($hasilBagi)) {
    // Menampilkan angka desimal sebelum dibulatkan
    echo "Hasil Pembagian $angka1 : $angka2 = $hasilBagi" . "<br>";
    echo "setelah di bulatkan = " . round($hasilBagi);
} else {
    // Jika tidak desimal, tetapkan nilai bulat
    $hasilBulat = $hasilBagi;
    echo "$angka1 : $angka2 = $hasilBulat";
}
?>  
