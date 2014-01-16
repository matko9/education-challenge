<?php

require __DIR__ . '/../../library/test.php';

$random = uniqid();
$pow = hashPow($random);
$hash = sha1($random . $pow);

assertTrue(substr($hash, 0, 4) === '0000');

echo "random: $random\n";
echo "pow: $pow\n";
echo "hash: $hash\n";

echo "success\n";
