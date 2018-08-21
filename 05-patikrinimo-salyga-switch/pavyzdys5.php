<?php

$diena = "antradienis";

switch ($diena) {
    case "sestadienis":
    case "sekmadienis":
        echo "savaitgalis!";
        break;
    default:
        echo "darbo diena :(";
        break;
}
