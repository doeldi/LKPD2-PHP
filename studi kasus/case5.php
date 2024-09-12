<!-- menghitung isi dalam string -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menghitung Jumlah Isi Dalam String</h1>
    <form action="" method="post">
        <label for="inputString">Masukan string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inputString'])) {
        $inputString = $_POST['inputString'];
        echo "Jumlah karakter: " . strlen($inputString);
    }
   ?>
</body>
</html>