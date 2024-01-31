<?php
// Buatlah kelompok dari bilangan dibawah ini. Kelompok pertama berisikan bilangan yang sama antara kedua variabel. Dan kelompok kedua bilangan selain itu (yang tidak sama / yang hanya terdapat di salah satu variabel saja)
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// fitur array untuk membandingkan nilai dari dua array
$kelompok_sama = array_intersect($bil1, $bil2);

// penggabungan dua array dengan operator +
$kelompok_tidak_sama = array_diff($bil1, $bil2) + array_diff($bil2, $bil1);

// Tampilkan hasil
// implode: fungsi php yang memiliki kegunaan untuk menggabungkan kembali string yang telah dipecahkan
echo "Kelompok bilangan yang sama: <br>" . implode(', ', $kelompok_sama) . "<br>";
echo "Kelompok bilangan yang tidak sama: <br>" . implode(', ', $kelompok_tidak_sama);
?>
