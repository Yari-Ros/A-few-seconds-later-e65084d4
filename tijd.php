<?php
if (strpos($argv[1], 's') !== false) {
    $string = $argv[1] . "s";
echo $int = (int)$string . " seconds";
}
else {
    echo "[Error!] No time has been found.";
}
