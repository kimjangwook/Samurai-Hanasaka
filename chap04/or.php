<?php

# 一人でもOKと言ったらやってしまうちょっとやばいやつ
$true = true;
$false = false;

$a = $true || $true;                // true
$b = $true || $false;               // true
$c = $true || $true || $true;       // true
$d = $true || $false || $false;     // true
$e = $true || ($true || $false);    // true
$f = $false || $false;              // false

var_dump($a, $b, $c, $d, $e, $f);