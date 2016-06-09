<?php

$file = '/tmp/' . basename(__FILE__) . '.txt';
if (is_file($file)) {
    unlink($file);
}
$startTime = microtime(true);
$counter = $counterOption;
while($counter > 0) {
    error_log(uniqid() . PHP_EOL, 3, $file);
    $counter--;
}

echo microtime(true) - $startTime . PHP_EOL;
