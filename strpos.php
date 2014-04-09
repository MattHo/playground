<?php
$filename = '/tmp/index.html';
$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
fclose($handle);

$start = microtime(true);
// print "$start\n";
for ($i = 0; $i < 10000; $i++) {
    $result = strpos($contents, '<!DOCTYPE html>') !== false;
}
$end = microtime(true);
// print "$end\n";
print sprintf('%f', $end - $start) . "\n";

$start = microtime(true);
// print "$start\n";
for ($i = 0; $i < 10000; $i++) {
    $result = substr($contents, 0, strlen('<!DOCTYPE html>')) === '<!DOCTYPE html>';
}
$end = microtime(true);
// print "$end\n";
print sprintf('%f', $end - $start) . "\n";
