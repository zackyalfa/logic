<?php
//buatlah fungsi yang menghitung lembaran uang rupiah
//contoh:140500
//lembar rupiah :
//- Rp. 100.000 : 1
//- Rp. 20.000 : 2
//- Rp. 500 : 1
function hitungLembaranRupiah($amount) {
    // Daftar nilai uang rupiah yang tersedia
    $denominations = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100, 10, 1];

    // Inisialisasi array untuk menyimpan hasil perhitungan lembaran
    $lembaran = [];

    // Loop melalui setiap nilai denominasi
    foreach ($denominations as $denomination) {
        // Hitung jumlah lembaran uang untuk denominasi saat ini
        $jumlahLembaran = floor($amount / $denomination);

        // Jika jumlah lembaran lebih dari 0, tambahkan ke array hasil
        if ($jumlahLembaran > 0) {
            $lembaran["$denomination"] = $jumlahLembaran;
        }

        // Kurangi jumlah yang sudah dihitung dari total amount
        $amount = $amount - ($jumlahLembaran * $denomination);
    }

    // Output hasil perhitungan
    foreach ($lembaran as $denomination => $jumlah) {
        echo "- Rp. $denomination : $jumlah lembar <br>";
    }
}
echo "Lembar Rupiah : <br>";
// Pemanggilan fungsi
hitungLembaranRupiah(140500);