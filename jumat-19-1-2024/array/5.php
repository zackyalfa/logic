<?php
// Gabungkan dua array tersebut, lalu untuk nilai yang sama maka akan diambil hanya salah satunya saja, setelah itu tampilkan bilangan secara terurut dari terbesar ke terkecil.
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

//array_unique:fitur untuk menghapus values duplicate pada array
//array_merge:fitur array untuk menggabungkan 2 array menjadi 1
//rsort:fitur untuk mengurutkan index dari terbesar ke terkecil
$bil3 = array_unique(array_merge($bil1, $bil2));
rsort($bil3);

// Tampilkan hasil
echo "Hasil setelah digabungkan dan diurutkan dari terbesar ke terkecil: <br> " . implode(', ', $bil3) . "";
?>
