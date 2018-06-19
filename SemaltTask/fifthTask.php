<?php
$a = [4,9,2,7,3];
$b = 'Hello world';
$a = implode(' ',$a);
$a = $a.$b;
$b = str_split(preg_replace('/[^0-9]/','',$a));
$a = preg_replace('/[0-9]+/','',$a);
echo "$a<br/>";
var_dump($b);