<?php 

function wrapText($text) {
    $count = str_split($text);

    if (count($count) > 50) {
        $text = substr($text, 0, 50);
        $text.= "...";
    }

    echo $text;
}

$kalimat = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, neque at efficitur viverra, nunc neque condimentum neque, ut consectetur ligula neque eu nunc. Nulla facilisi. Sed bibendum, sem vel tincidunt viverra, arcu felis facilisis lectus, vel consectetur neque ligula vel nunc. Donec non orci vel dolor dignissim tempus. Donec non velit vel arcu suscipit elementum.";

echo $kalimat;

wrapText($kalimat);