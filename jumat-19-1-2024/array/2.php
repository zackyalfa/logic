<?php
// Dari data berikut, tampilkan nama dan dari data tahun tersebut tentukan apakah nama tersebut lahir ditahun kabisat atau bukan.
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];


foreach ($data as $key => $value) {
    $keterangan = ($value['tahun'] % 4 == 0 && ($value['tahun'] % 100 != 0 || $value['tahun'] % 400 == 0)) ? 'tahun kabisat' : 'bukan tahun kabisat';

    echo $value['nama']. ": lahir pada ". $keterangan.  ":". $value['tahun']."<br>";
}

?>
