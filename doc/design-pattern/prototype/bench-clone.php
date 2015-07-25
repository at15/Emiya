<?php
/**
 * Created by PhpStorm.
 * User: at15
 * Date: 15-7-25
 * Time: 下午2:54
 */

require_once(__DIR__ . '/BookPrototype.php');

$bookPrototype = new BookPrototype();

$start_time = microtime(TRUE);

for ($i = 0; $i < 100000; $i++) {
    $book = clone $bookPrototype;
}

$end_time = microtime(TRUE);

echo $end_time - $start_time . PHP_EOL;
echo memory_get_usage() . PHP_EOL;
echo memory_get_peak_usage() . PHP_EOL;