<?php

$num = 11;

for ($p = 2; $p <= $num - 1; $p++) {
    if ($num % $p == 0) {
        echo $num . 'は素数ではありません';
        break;
    } else {
        echo $num . 'は素数です';
        break;
    }
}
