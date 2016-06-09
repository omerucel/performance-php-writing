<?php

$options = getopt('c:');
$counterOption = array_key_exists('c', $options) ? $options['c'] : 10000;

echo 'Counter: ' . $counterOption . PHP_EOL;

echo 'Test1 running...' . PHP_EOL;
include ('test1.php');

echo 'Test2 running...' . PHP_EOL;
include ('test2.php');

echo 'Test3 running...' . PHP_EOL;
include ('test3.php');

echo 'Test4 running...' . PHP_EOL;
include ('test4.php');

echo 'Test5 running...' . PHP_EOL;
include ('test5.php');

echo 'Test6 running...' . PHP_EOL;
include ('test6.php');

echo 'Test7 running...' . PHP_EOL;
include ('test7.php');
