<?php

$file = '/tmp/' . basename(__FILE__) . '.txt';
if (is_file($file)) {
    unlink($file);
}
$startTime = microtime(true);
$fp = fopen($file, 'a');
$counter = $counterOption;
while($counter > 0) {
    fwrite($fp, uniqid() . PHP_EOL);
    $counter--;
}

echo microtime(true) - $startTime . PHP_EOL;
