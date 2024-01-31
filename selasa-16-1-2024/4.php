<?php
//jika dua variable sama maka munculkan a jika tidak sama munculkan angka teresar 
$a=10;
$b=10;

// Memeriksa apakah dua variabel sama
if ($a == $b) {
    echo "Kedua variabel sama: $a";
} else {
    // Menampilkan angka terbesar
    echo "Kedua variabel tidak sama. Angka terbesar: ".max($a,$b);
}
