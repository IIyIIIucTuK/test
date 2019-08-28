<?php

$a = 0;
$b = 1;

for ($i = 0; $i < 64; $i++) {
    $fib = $a + $b;
    $a = $b;
    $b = $fib;
    echo $i.') '. $fib . '<br>';
}
