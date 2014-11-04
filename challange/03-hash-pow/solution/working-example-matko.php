<?php

function hashPow ($string) {
  for ($i=1;$i<100000;$i++){
  	$pow = sha1($i);
  	$hash = sha1($string . $pow);
  	if (substr($hash, 0, 4) === '0000') return $pow;
  }
}
