<?php
//buatlah sebuah function yang akan menampilkan hari tanggal yang datanya (mon,29 jan 2024) menjadi (senin,29 jan 2024) hari mengunakan bahasa indonesia,argument diambil dari variable($date)
function tampilkanTanggalIndonesia($date) {
    // Array nama hari dalam Bahasa Indonesia
    $namaHari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
    
    // Mengembalikan objek DateTime baru yang diformat sesuai dengan format yang ditentukan:
    $tanggal = date_create_from_format('D, d M Y', $date);
    
    // Ambil nama hari dari array
    $hari = $namaHari[date_format($tanggal, 'w')];
    
    // Ubah format tanggal menjadi "Hari, dd M Y"
    $tanggalIndonesia = date_format($tanggal, 'd M Y');
    
    // Tampilkan hasil
    echo $hari . ', ' . $tanggalIndonesia;
}

// Contoh penggunaan
$date = date('D, d M Y');
echo $date . " vs ";
tampilkanTanggalIndonesia($date);