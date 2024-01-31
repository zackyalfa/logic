<?php
$berat_badan_beni = 44; 
$tinggi_badan_beni = 148 / 100; // Ubah tinggi badan dari cm ke meter

$imt_beni = $berat_badan_beni / ($tinggi_badan_beni * $tinggi_badan_beni);

if ($imt_beni < 18.5) {
    $kategori_imt = "Berat Badan Kurang";
} elseif ($imt_beni >= 18.5 && $imt_beni < 22.9) {
    $kategori_imt = "Normal";
} elseif ($imt_beni >= 22.9 && $imt_beni < 24.9) {
    $kategori_imt = "Berat Badan Lebih";
} else {
    $kategori_imt = "Obesitas";
}

echo "Berat Badan Beni: " . $berat_badan_beni . " kg" . "<br>";
echo "Tinggi Badan Beni: " . $tinggi_badan_beni * 100 . " cm" ."<br>" ;
echo "IMT Beni: " .$imt_beni . "<br>";
echo "Kategori IMT Beni: " . $kategori_imt;
?>
