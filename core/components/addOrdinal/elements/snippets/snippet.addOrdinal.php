<?php
$lastDigit = $input[strlen($input)-1];

if ($lastDigit == '0' || $lastDigit == '1' || $lastDigit == '4'||$lastDigit == '5'||$lastDigit == '6'||$lastDigit == '7'||$lastDigit == '8'||$lastDigit == '9') {
	return $input.'<sup>th</sup>';
} else if ($lastDigit == '2') {
	return $input.'<sup>nd</sup>';
} else if ($lastDigit == '3') {
	return $input.'<sup>rd</sup>';
}

return $input;