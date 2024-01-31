<?php
//Dari bilangan berikut, kelompokan nilai-nilai tersebut menjadi kelompok kompeten (lebih dari atau sama dengan 75) dan belum kompeten (selain dari itu). Lalu tampilkan berdasarkan kelompok tersebut.
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kompeten = [];
$belum_kompeten = [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belum_kompeten[] = $nilai;
    }
}

echo "Kelompok Kompeten: <br>";
foreach ($kompeten as $nilai) {
    echo $nilai . " ". "<br>";
}

echo "Kelompok Belum Kompeten: <br>";
foreach ($belum_kompeten as $nilai) {
    echo $nilai . " ". "<br>";
}
?>
