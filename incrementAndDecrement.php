<?php

// ++ and --

$n = 7;
$m = $n++;

/*
$m=$n;
$n=$n+1;
 */

echo "{$n} \n{$m} \n";

$m = ++$n;
/* that means
$n=n+1;
$m=$n;
 */

echo "{$m} \n{$n} \n";

$n1 = 12;
$n2 = $n1--;

// $n2 = $n1;
// $n1=$n1-1

echo "{$n1} \n{$n2}\n";

$n1 = 12;
$n2 = --$n1;

// $n1=$n1-1
// $n2 = $n1;

echo "{$n1} \n{$n2}\n";