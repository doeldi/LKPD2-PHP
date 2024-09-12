<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="form">
            <form action="" method="post">
                <div class="form-group">
                    <label for="kalimat">Masukan Kalimat</label>
                    <input type="text" class="form-control" id="kalimat" name="kalimat" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kalimat'])) {
            $teks = $_POST['kalimat'];

            // mencari semua simbol (karakter yang bukan huruf atau angka)
            preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);

            if (count($matches[0]) > 0) {
                // menghilangkan duplikasi simbol
                $uniqueSymbols = array_unique($matches[0]);
                echo "<div class='result mt-3 alert alert-info'>Simbol yang terdapat pada teks adalah: " . implode(', ', $uniqueSymbols) . "</div>";
            } else {
                echo "<div class='result mt-3 alert alert-warning'>Tidak ada simbol pada teks</div>";
            }
        }
        ?>
    </div>
</body>

</html>