<?php

$nilai = 90;

if ($nilai >= 90) {
    $predikat = "A";
} elseif ($nilai >= 75) {
    $predikat = "B";
} else {
    $predikat = "C";
}

echo "Dengan nilai $nilai, Anda mendapatkan predikat $predikat.";
?>
