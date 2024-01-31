<?php
function hitungLembaranRupiah($amount) {
    // Daftar nilai uang rupiah yang tersedia
    $denominations = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100, 50];

    // Inisialisasi array untuk menyimpan hasil perhitungan lembaran
    $lembaran = [];

    // Fungsi array_reduce untuk mengumpulkan hasil perhitungan lembaran
    array_reduce($denominations, function ($remainingAmount, $denomination) use (&$lembaran) {
        // Hitung jumlah lembaran uang untuk denominasi saat ini
        $jumlahLembaran = floor($remainingAmount / $denomination);

        // Jika jumlah lembaran lebih dari 0, tambahkan ke array hasil
        if ($jumlahLembaran > 0) {
            $lembaran["Rp. $denomination"] = $jumlahLembaran;
        }

        // Hitung sisa pembagian setelah menghitung lembaran uang untuk setiap denominasi
        return $remainingAmount % $denomination;
    }, $amount);

    // Output hasil perhitungan
    foreach ($lembaran as $denomination => $jumlah) {
        echo "$denomination : $jumlah lembar <br>";
    }
}
echo "Lembar Rupiah : <br>";
// Pemanggilan fungsi
hitungLembaranRupiah(140500);