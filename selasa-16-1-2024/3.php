<?php
//mini market eko menjual berbagai barang kebutuhan.Setiap pelanggan berbelanja lebih dari 100.000 akan mendapat potongan harga sebesar 10.000 jika andi berbelanja sebesar 180.000 apanyang akan didapatkan andi
$total_belanja_andi = 180000; // Total belanja Andi
$potongan_harga = 10000; // Potongan harga 10.000
// Syarat potongan harga
if ($total_belanja_andi > 100000) {
    $total_harga_setelah_diskon = $total_belanja_andi - $potongan_harga;
    echo "Anda mendapatkan potongan harga sebesar 10.000"."<br>";
    echo "Total yang harus dibayar oleh Anda: " . $total_harga_setelah_diskon;
} else {
    echo "Maaf anda tidak mendapatkan potongan harga."."<br>";
    echo "Total yang harus dibayar oleh Anda: " . $total_belanja_andi;
}
