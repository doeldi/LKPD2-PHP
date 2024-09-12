<?php

function createArray(...$jurusan) {
    $arr = [];
    
    foreach ($jurusan as $value) {
        // Mengecek apakah nilai hasil konversi huruf kapital belum ada di array $arr
        if (in_array(strtoupper($value), $arr) == false) {
            // Jika belum ada, tambahkan ke array $arr setelah diubah ke huruf kapital
            array_push($arr, strtoupper($value));
        }
    }

    // Kembalikan array $arr yang berisi elemen-elemen unik dalam huruf kapital
    return $arr;
}

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));

?>
