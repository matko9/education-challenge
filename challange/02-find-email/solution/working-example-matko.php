<?php

function findEmail ($text) {
	$list = explode(' ', $text);
	$pattern = '/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i';
	foreach ($list as $word){
		if (preg_match($pattern,$word,$matches)) return $matches[0];
 	}
}
