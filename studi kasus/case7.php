<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
     <h1>Huruf Besar Menjadi Huruf Kecil</h1>
     <form action="" method="post">
         <label for="input">Masukkan huruf besar:</label>
         <input type="text" id="input" name="input" required>
         <button type="submit">Konversi</button>
     </form>

     <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $input = $_POST['input'];
             $output = strtolower($input);
             echo "Huruf besar: $output";
         }
    ?>
 </body>
 </html>