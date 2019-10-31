<?php
$counter = 0;

$pieces = explode (" ", $argv[1]);
foreach ($pieces as $value) {
    $laatstekarakter = substr($value , -1);
    switch ($laatstekarakter) {
        case "s":
            $counter += (int)$value;
            break;
        case "m":
            $counter += (int)$value * 60;
            break;
        case "h":
            $counter += (int)$value * 60 * 60;
            break;
        case "d":
            $counter += (int)$value * 24 * 60 * 60;
            break;
    }
}
echo "$counter seconden";
?>