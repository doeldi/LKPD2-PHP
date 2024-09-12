<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$bilangan = array_merge($bil1, $bil2);

$bilanganUnique = array_unique($bilangan);
 
sort($bilanganUnique);

echo "Hasil: ";

echo implode("\n", $bilanganUnique);