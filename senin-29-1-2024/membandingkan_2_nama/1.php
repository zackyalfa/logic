<?php
//buatlah sebuah fungsi yang akan membandingkan 2 buah nama. lalu, menampilkan jumlah karakater dari dua nama tersebut, dan menampilkan nama yang memiliki jumlah karakter lebih banyak serta selisihnya 
function pembandingNama($nama1, $nama2) {
    // Menghitung panjang string (jumlah karakter) dari kedua nama
    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);

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
        echo "Kedua nama memiliki jumlah karakter yang sama.";
    }
}

pembandingNama("zacky ", "Alfarizi");
?>
