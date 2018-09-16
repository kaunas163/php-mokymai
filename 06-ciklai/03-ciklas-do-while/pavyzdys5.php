<?php

$skaicius = 20;

do {
    if ($skaicius % 3 == 0) {
        echo "skaicius $skaicius dalinasi is 3 <br>";
    } else {
        echo "$skaicius <br>";
    }
    $skaicius--;
} while ($skaicius > 0);
