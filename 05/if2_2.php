<?php

$poket_money = 1000;
$fund_raising = 101;

echo 'あなたの所持金は' . $poket_money . 'です。' . '<br>';


$m = $poket_money - $fund_raising;
do {
    echo $fund_raising . '円募金しました。' . '<br>';
    echo '残り残高は' . $m . '円です。' . '<br>';
    $m = $m - 101;
} while ($m > 0);

echo 'あなたはこれ以上募金できません' . '<br>';
