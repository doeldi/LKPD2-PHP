<?php

function checkJawaban($nama, ...$arrJawaban) {
    // Array yang menyimpan jawaban benar
    $jawaban = ["A", "D", "C", "C", "B", "A", "E", "B", "A", "E"];
    
    $arrBenar = [];

    foreach ($jawaban as $key => $value) {
        // Memeriksa apakah jawaban siswa ($arrJawaban[$key]) sesuai dengan jawaban benar ($value)
        if ($arrJawaban[$key] == $value) {
            // Jika benar, simpan nilai 1 pada array $arrBenar untuk indeks yang sama
            $arrBenar[$key] = 1;
        } else {
            // Jika salah, simpan nilai 0 pada array $arrBenar
            $arrBenar[$key] = 0;
        }
    }

    echo "Nama : $nama <br>";
    
    echo "Jumlah Jawaban Benar : <b>" . count(array_keys($arrBenar, 1)) . "</b></br>";
    echo "Jumlah Jawaban Salah : <b>" . count(array_keys($arrBenar, 0)) . "</b></br>";
}

checkJawaban("Putri", "A", "B", "D", "C", "B", "A", "E", "B", "A", "E");

?>
