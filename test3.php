<?php

$file = '/tmp/' . basename(__FILE__) . '.txt';
if (is_file($file)) {
    unlink($file);
}
$startTime = microtime(true);
$counter = $counterOption;
while($counter > 0) {
    file_put_contents($file, uniqid() . PHP_EOL, FILE_APPEND);
    $counter--;
}

echo microtime(true) - $startTime . PHP_EOL;
