<?php

$num = 37;

$res = true;
for($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $res = false;
        break;
    }
}

if ($res) {
    echo $num . 'は素数です。';
} else {
    echo $num . 'は素数ではありません。';
}