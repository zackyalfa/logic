<?php
// Mendefinisikan fungsi pembandingNama dengan dua parameter $nama1 dan $nama2
function pembandingNama($nama1, $nama2) {
    //Fungsi str_replace() menggantikan beberapa karakter dengan beberapa karakter lain dalam sebuah string
    // Menghitung panjang string (jumlah karakter) dari kedua nama
    $panjangNama1 = strlen(str_replace(' ', '', $nama1));
    $panjangNama2 = strlen(str_replace(' ', '', $nama2));

    // Membandingkan panjang kedua nama dan memberikan output sesuai kondisi
    if ($panjangNama1 > $panjangNama2) {
        // Jika panjang $nama1 lebih besar, menghitung selisih dan memberikan pesan
        $selisih = $panjangNama1 - $panjangNama2;
        echo "$nama1 memiliki jumlah karakter lebih banyak daripada $nama2 sebanyak $selisih karakter.";
    } elseif ($panjangNama1 < $panjangNama2) {
        // Jika panjang $nama2 lebih besar, menghitung selisih dan memberikan pesan
        $selisih = $panjangNama2 - $panjangNama1;
        echo "$nama2 memiliki jumlah karakter lebih banyak daripada $nama1 sebanyak $selisih karakter.";
    } else {
        // Jika panjang kedua nama sama, memberikan pesan bahwa jumlah karakter sama
        echo "Kedua nama memiliki jumlah karakter yang sama (tanpa spasi).";
    }
}

// Memanggil fungsi pembandingNama dengan dua nama sebagai argumen
pembandingNama("zacky ", "Alfarizi");
?>
