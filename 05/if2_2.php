<?php

$poket_money = 1000;
$fund_raising = 101;

echo 'あなたの所持金は' . $poket_money . 'です。' . '<br>';


$m = $poket_money;
do {
    $m = $m - $fund_raising;
    echo $fund_raising . '円募金しました。' . '<br>';
    echo '残り残高は' . $m . '円です。' . '<br>';
} while ($m > $fund_raising);

echo 'あなたはこれ以上募金できません' . '<br>';
