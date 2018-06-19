<?php
$a = 'This server has 5000 GB RAM and 386 GB storage';
$mas = explode(" ",$a);
list($mas[3], $mas[7]) = array($mas[7], $mas[3]);
$res = implode('', $mas);
echo $res;
