<?php

// いつも違うことをするやつみたいなもの
$true = true;
$false = false;

$a = !$true;            // false
$b = !$false;           // true
$c = !$true && !$true;  // false
$d = !($true && $true); // false

var_dump($a, $b, $c, $d);
