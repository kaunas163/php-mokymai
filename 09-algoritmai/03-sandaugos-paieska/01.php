<?php

$skaiciai = array(5, 8, 3, 5, 7, 2, 1, 3);

$sandauga = 1;

for ($i = 0; $i < count($skaiciai); $i++) {
    $sandauga *= $skaiciai[$i];
}

echo "sandauga: $sandauga";
