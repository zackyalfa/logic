<?php
//Data berikut merupakan data apa-apa saja yang Andi beli pada suatu minimarket. Dari data tersebut, hitunglah total uang yang perlu Andi bayar untuk membelinya
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ],
];

$total_pembelian = 0;

foreach ($barang as $key => $value) {
    $total_pembelian += $value['harga_barang'] * $value['jumlah_beli'];

    echo $value['nama_barang']. " = Rp. " . number_format($value['harga_barang'] * $value['jumlah_beli']) . "<br>";
}
echo "Total Pembelian = Rp. " . number_format($total_pembelian);

?>
