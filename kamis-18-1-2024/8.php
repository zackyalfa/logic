<?php
$kehadiran = 100;
$kehadiran_izin = 2;
$kehadiran_alfa = 3;

// Menghitung persentase kehadiran berdasarkan aturan yang diberikan
if ($kehadiran_izin) {
    $kehadiran_izin -= ($kehadiran_izin * 0.03); // Izin berkurang 3%
} else {
    $kehadiran_izin1 = $kehadiran_izin;
}

if ($kehadiran_alfa) {
    $kehadiran_alfa -= ($kehadiran_alfa * 0.05); // Alfa berkurang 5%
} else {
    $kehadiran_alfa1 = $kehadiran_alfa;
}

$persentase_kehadiran = $kehadiran - $kehadiran_izin - $kehadiran_alfa;

// Menampilkan hasil
echo "Jumlah persentase kehadiran anda: $persentase_kehadiran%";
?>
