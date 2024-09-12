<?php
$teks = "Selamat Datang di";

$karakter = 'd';   

strtolower($teks);
$hitung = substr_count($teks, $karakter);

if ($hitung > 0) {
    echo "Karakter '$karakter' muncul $hitung kali";
} else {
    echo "Karakter '$karakter' tidak ditemukan dalam teks";
}