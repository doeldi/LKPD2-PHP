<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="nominal">Masukan nominal uang</label>
        <input type="number" id="nominal" name="nominal" required>
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nominal'])) {
    $uangInput = $_POST['nominal'];

    function koin($uang)
    {
        // Array kosong untuk menyimpan hasil perhitungan pecahan uang 
        $arr = [];

        // Mengambil nilai pecahan terakhir dari uang (maksimal 6 digit dari nominal yang dimasukkan)
        $koinUang = substr($uang, -6);

        // Memeriksa apakah pecahan Rp. 100000 bisa diambil dari nominal
        if ($koinUang % 100000 != $koinUang) {
            $jumlahLembar = floor($koinUang / 100000); // Menghitung jumlah pecahan Rp. 100000
            $koinUang -= $jumlahLembar * 100000; // Mengurangi nominal uang dengan jumlah pecahan yang ditemukan
            array_push($arr, "Rp. 100000 ada $jumlahLembar"); // Menyimpan informasi jumlah pecahan ke array
        }

        if ($koinUang % 20000 != $koinUang) {
            $jumlahLembar = floor($koinUang / 20000); 
            $koinUang -= $jumlahLembar * 20000; 
            array_push($arr, "Rp. 20000 ada $jumlahLembar");
        }

        if ($koinUang % 5000 != $koinUang) {
            $jumlahLembar = floor($koinUang / 5000); 
            $koinUang -= $jumlahLembar * 5000; 
            array_push($arr, "Rp. 5000 ada $jumlahLembar"); 
        }

        if ($koinUang % 500 != $koinUang) {
            $jumlahLembar = floor($koinUang / 500); 
            $koinUang -= $jumlahLembar * 500; 
            array_push($arr, "Rp. 500 ada $jumlahLembar");
        }

        echo "Jenis koin untuk Uang Rp. " . number_format($uang, 0, '.', '.') . " : <br>";
        echo "<ul>";
        // Loop melalui array hasil pecahan dan menampilkan setiap jenis dan jumlah pecahan uang
        foreach ($arr as $value) {
            echo "<li>  $value  </li>";
        }
        echo "<ul>";
    }

    koin($uangInput);
}
?>
