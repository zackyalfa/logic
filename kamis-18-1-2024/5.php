<?php
$waktu1 = '19:00';
$waktu2 = '23:45';
$waktu3 = '08:55';

// Waktu 19:00
list($jam1, $menit1) = explode(':', $waktu1);
$ampm1 = ($jam1 >= 12) ? 'pm' : 'am';
$jam12_1 = ($jam1 > 12) ? $jam1 - 12 : $jam1;
$pukul_format_1 = sprintf('%02d:%s %s', $jam12_1, $menit1, $ampm1);
echo "Pukul 19:00 diubah menjadi: $pukul_format_1<br>";

// Waktu 23:45
list($jam2, $menit2) = explode(':', $waktu2);
$ampm2 = ($jam2 >= 12) ? 'pm' : 'am';
$jam12_2 = ($jam2 > 12) ? $jam2 - 12 : $jam2;
$pukul_format_2 = sprintf('%02d:%s %s', $jam12_2, $menit2, $ampm2);
echo "Pukul 23:45 diubah menjadi: $pukul_format_2<br>";

// Waktu 08:55
list($jam3, $menit3) = explode(':', $waktu3);
$ampm3 = ($jam3 >= 12) ? 'pm' : 'am';
$pukul_format_3 = sprintf('%02d:%s %s', $jam3, $menit3, $ampm3);
echo "Pukul 08:55 diubah menjadi: $pukul_format_3<br>";
?>
