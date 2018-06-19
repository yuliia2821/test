<?php
/**
 * Created by PhpStorm.
 * User: Lulu
 * Date: 13.06.2018
 * Time: 23:17
 */
$a = -25;
$b = 8;
$q = floor($a/$b);
$r = $a - ($b*$q);
if ($r < 0 and $r > $b){
    $q = $q - 1;
    $r = $a - ($b*$q);
    };
echo "q = $q, r = $r";


