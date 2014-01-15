<?php

function assertTrue ($condition, $message = 'Assertation failure') {
  if (!$condition)
    throw new Exception($message);
}

if (!isset($argv[1])) {
  echo "Example usage: php test.php solution/working-example.php\n";
  return;
}

include __DIR__ . '/' . $argv[1];

$random = uniqid();
$pow = hashPow($random);
$hash = sha1($random . $pow);

assertTrue(substr($hash, 0, 4) === '0000');

echo "random: $random\n";
echo "pow: $pow\n";
echo "hash: $hash\n";

echo "success\n";
