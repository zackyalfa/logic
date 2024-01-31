<?php
//diketahui
$jamNormal =8;
$kompensasi1 = 50000;
$kompensasi2 = 25000;

//ditanyakan
$jamMulai = 8;
$jamSelesai = 22;

//jawaban
$jumlahJam = $jamSelesai - $jamMulai;

if ($jumlahJam > $jamNormal) {
    $jamkompe = $jumlahJam - $jamNormal;
    if ($jamkompe == 1) {
        $kompeawal = $kompensasi1;
    }else {
        $kompeawal = (($jamkompe - 1) * $kompensasi2) + $kompensasi1;
    }
    echo "jumlah kompensasi:". $kompeawal;
}else {
    echo "tidak mendapat kompensasi";
}