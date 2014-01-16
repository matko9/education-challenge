<?php

require __DIR__ . '/../../library/test.php';

$email = uniqid() . '@' . uniqid() . '.com';
$text = "\n" .
'My personal email is ' . str_repeat(mt_rand(), mt_rand() % 5) . ' ' . $email . "\n" .
str_repeat(mt_rand(), mt_rand() % 5) . ' bye!';

assertTrue(findEmail($text) === $email);

echo "email: $email\n";

echo "success\n";
