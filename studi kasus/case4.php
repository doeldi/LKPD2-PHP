<!-- cek angka bilangan prima -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="angka">Masukan angka:</label>
        <input type="number" id="angka" name="angka" required>
        <button type="submit">Cek</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka = $_POST["angka"];
            $isPrime = true;

            if ($angka <= 1) {
                $isPrime = false;
            }

            for ($i = 2; $i <= sqrt($angka); $i++) {
                if ($angka % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            
            if ($isPrime) {
                echo "Angka $angka adalah bilangan prima.";
            } else {
                echo "Angka $angka bukan bilangan prima.";
            }
        }
    ?>
</body>
</html>