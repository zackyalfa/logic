<?php
$total_pembelian = 130000;
$hari_ini = "selasa";

// Inisialisasi diskon dan promo
$diskon = 0;
$promo = 0;

// Memeriksa apakah hari ini Selasa
if ($hari_ini == "selasa") {
    $promo = 0.05; //jika pembelian pada hari selasa 
    if ($total_pembelian > 100000) {
        $diskon = 0.07    ;  // Diskon 5% untuk pembelian di atas 100.000
    }

}

// Menghitung total yang harus dibayarkan
$total_dibayarkan = $total_pembelian - ($total_pembelian * $promo) - ($total_pembelian*$diskon);
echo "sebelum mendapatkan diskon:". number_format($total_pembelian,2,".","."). "<br>";
echo "Total yang harus dibayarkan: " . number_format($total_dibayarkan,2,".",".");

