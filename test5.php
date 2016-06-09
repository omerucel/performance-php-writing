<?php

$file = '/tmp/' . basename(__FILE__) . '.txt';
if (is_file($file)) {
    unlink($file);
}
$startTime = microtime(true);
$fp = fopen($file, 'a');
flock($fp, LOCK_UN);
$counter = $counterOption;
while($counter > 0) {
    if (flock($fp, LOCK_EX)) {
        fwrite($fp, uniqid() . PHP_EOL);
    }
    flock($fp, LOCK_UN);
    $counter--;
}

echo microtime(true) - $startTime . PHP_EOL;
