<?php
// baris : loop pertama diambil dari kontennya ada berapa

// kolom : loop kedua ambil dari jumlah kolom di per konten
for ($i = 1; $i <= 2; $i++) {
    // Loop pertama: $i akan bernilai 1 pada iterasi pertama dan 2 pada iterasi kedua
    for ($x = 1; $x <= 4; $x++) {
        // Loop kedua: $x akan bernilai antara 1 hingga 4
        for ($y = 0; $y < 8; $y++) {
            // Loop ketiga: $y akan bernilai antara 0 hingga 7
            echo "*";
        }
        echo "</br>"; 
    }
    echo "</br>"; 
}