<?php

# 満場一致のようなもの
$true = true;
$false = false;

$a = $true && $true;                // true
$b = $true && $false;               // false
$c = $true && $true && $true;       // true
$d = $true && $false && $false;     // false
$e = $true && ($true && $false);    // false

var_dump($a, $b, $c, $d, $e);