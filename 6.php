<?php

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
        'jumlah_beli' => 4,
    ],
];

$price = 0;

echo "Daftar Belanjaan : </br>";
echo "<ol>";

foreach ($barang as $item) {
    // menghitung harga subtotal untuk item
    $subPrice = $item['harga_barang'] * $item['jumlah_beli'];

    // menampilkan nama barang, jumlah yang dibeli, dan harga subtotal dalam bentuk format
    echo "<li> " . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : " . number_format($subPrice, 0,'.','.');
    // menambahkan harga subtotal ke total harga
    $price += $subPrice;
}

echo "</ol>";
echo "<br>";

echo "Total harga yang harus dibayar adalah <b> Rp. " . number_format($price, 0,'.','.') . "</b>";
