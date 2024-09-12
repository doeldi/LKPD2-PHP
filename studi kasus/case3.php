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
        <form action="" method="post">
            <div class="form-group">
                <label for="angka1">Angka 1</label>
                <input type="number" id="angka1" name="angka1" class="form-control mb-2" required>
                <label for="angka2">Angka 2</label>
                <input type="number" id="angka2" name="angka2" class="form-control mb-2" required>
                <label for="operator">Operator</label>
                <select id="operator" name="operator" required class="form-control mb-3">
                    <option value="none">pilih operator</option>
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">*</option>
                    <option value="bagi">/</option>
                </select>
                <button type="submit" class="btn btn-primary">Hitung</button>
            </div>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];
            $result;

            switch ($operator) {
                case 'tambah':
                    $result = $angka1 + $angka2;
                    break;
                case 'kurang':
                    $result = $angka1 - $angka2;
                    break;
                case 'kali':
                    $result = $angka1 * $angka2;
                    break;
                case 'bagi':
                    if ($angka2 == 0) {
                        echo "<div class='mt-3 alert alert-warning'>Error: Pembagi tidak boleh 0</div>";
                        exit();
                    }
                    $result = $angka1 / $angka2;
                    break;
                default:
                    echo "<div class='mt-3 alert alert-warning'>Error: Invalid operator</div>";
                    exit();
            }

            echo "<div class='mt-3 alert alert-success'> Hasil: " . $result . "</div>";
        } else {
            echo "<div class='mt-3 alert alert-info'>Silahkan isi formulir di atas</div>";
        }
        ?>
    </div>
</body>

</html>