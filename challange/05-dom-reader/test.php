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

$dom = new dom();

$dom->loadHTML(file_get_contents('example.html'));

assertTrue($dom->documentElement->getElementsByTagName('p')->item(0)->textContent === 'I like chocolate');

echo "success\n";
