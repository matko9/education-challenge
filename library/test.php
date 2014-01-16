<?php

function assertTrue ($condition, $message = 'Assertation failure') {
  if (!$condition)
    throw new Exception($message);
}

if (!isset($argv[1])) {
  echo "Example usage: php test.php solution/working-example.php\n";
  return;
}

include $argv[1];
