<?php

$file = '/tmp/' . basename(__FILE__) . '.txt';
if (is_file($file)) {
    unlink($file);
}
$startTime = microtime(true);
$counter = $counterOption;
while($counter > 0) {
    $fp = fopen($file, 'a');
    fwrite($fp, uniqid() . PHP_EOL);
    fclose($fp);
    $counter--;
}

echo microtime(true) - $startTime . PHP_EOL;
