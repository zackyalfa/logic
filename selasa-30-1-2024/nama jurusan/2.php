<?php
function createArray(...$jurusan) {
    // Inisialisasi array untuk menyimpan nilai unik
    $uniqueJurusan = [];
    // Loop through setiap jurusan
    foreach ($jurusan as $jur) {
        // Fungsi strtoupper() mengubah string menjadi huruf besar
        $jur = strtoupper($jur);
        // Cek apakah jurusan sudah ada di dalam array
        if (!in_array($jur, $uniqueJurusan)) {
            // Jika belum, tambahkan ke array
            $uniqueJurusan[] = $jur;
        }
    }
    return $uniqueJurusan;
}
// Pemanggilan fungsi
print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));