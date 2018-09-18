<?php

$skaiciai = array();

for ($i = 0; $i < 20; $i++) {
    $skaiciai[$i] = rand(1, 10);
}

$ieskomas = rand(1, 10);
echo "ieskomas skaicius yra $ieskomas <br>";

echo "<ul>";
foreach ($skaiciai as $skaicius) {
    if ($ieskomas === $skaicius) {
        echo '<li style="color: red">'.$skaicius.'</li>';
    } else {
        echo "<li>$skaicius</li>";
    }
}
echo "</ul>";
