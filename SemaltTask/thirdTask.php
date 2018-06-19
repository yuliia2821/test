<?php
/**
 * Created by PhpStorm.
 * User: Lulu
 * Date: 13.06.2018
 * Time: 21:22
 */

$a = array (2,3,56,65,56,44,34,45,3,5,35,345,3,5);
$first = $a[0];
unset($a[0]);
$sum = 0;
for ($i=1; $i<=count($a); $i++) {
    $sum = $sum + $a[$i];
};
$sa = $sum/count($a);

echo "Первый элемент массива $first был удален.<br/>Cреднее арифметическое остатка $sa.";
