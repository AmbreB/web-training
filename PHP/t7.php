<?php

$string = "a";
for ($i=0; $i < strlen($string); $i++) { 
	$string[$i] = strtoupper($string[$i]);
}
var_dump($string);