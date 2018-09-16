<?php

$skaiciai = array(9, 8, 7, 2, 3, 4, 7);

$sandauga = 1;

foreach ($skaiciai as $skaicius) {
    $sandauga *= $skaicius;
}
echo "sandauga: $sandauga";
