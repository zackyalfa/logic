<?php
// Ambil tanggal hari ini secara otomatis
$hari_ini = date('D');

// Cek apakah hari ini adalah hari Senin
if ($hari_ini == 'Mon') {
    echo "Hari ini upacara.";
} else {
    echo "Hari ini tidak upacara.";
}
?>

