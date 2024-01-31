<?php
//buatlah sebuah fungsi yang akan menghasilkan sebuah array dari banyak data yang di terima. data yang di kirim berbentuk string nama-namam jurusan. jika nama jurusan ada yang dipanggil duplikat, maka yang dimasukan ke array hanya salah satunya saja (capslock).
//contoh pemanggilan argumentnya : namafunc("PPLG","HTL","KLN","PMN","pplg").maka akan menghasilkan array ["PPLG","HTL","KLN","PMN"]

function createArray(...$jurusan) {
    //Fungsi array_map() mengirimkan setiap nilai array ke fungsi buatan pengguna, dan mengembalikan array dengan nilai baru, yang diberikan oleh fungsi buatan pengguna.
    //Fungsi strtoupper() mengubah string menjadi huruf besar
    $jurusan = array_map('strtoupper', $jurusan);
    
    //Fungsi array_unique() menghapus nilai duplikat dari array. Jika dua atau lebih nilai array sama, tampilan pertama akan dipertahankan dan tampilan lainnya akan dihapus.
    $uniqueJurusan = array_unique($jurusan);

    // Fungsi array_values() mengembalikan array yang berisi semua nilai array.
    return array_values($uniqueJurusan);
}

// Pemanggilan fungsi
print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));