<?php
header('Content-Type: text/plain'); // Adds this line to fix formatting

$names = ['ALEC', 'BETH', 'CAROLINE', 'DAve', 'ElAnor', 'ANNa', 'Freddie', 'AdaM'];

foreach ($names as $name) {
    if (strtoupper($name[0]) === 'A') {
        continue;
    }
    $reversed = strrev($name);
    echo strtolower($reversed) . "\n";
}
?>