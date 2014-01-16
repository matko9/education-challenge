<?php

require __DIR__ . '/../../library/test.php';

$dom = new dom();

$dom->loadHTML(file_get_contents('example.html'));

assertTrue($dom->documentElement->getElementsByTagName('p')->item(0)->textContent === 'I like chocolate');

echo "success\n";
