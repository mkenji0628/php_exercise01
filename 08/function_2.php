<?php

function calc_cal($total_meals)
{
    // コードを追記
    // 標準関数を使用して、配列の値を合算
    $goukei = array_sum($total_meals);
    echo "摂取カロリーの合計は{$goukei}Kcalです";
}

$yesterday_meal = [
    '食パン' => 300,
    'ステーキ' => 1200,
    'うどん' => 500
];

$today_meal = [
    'シリアル' => 200,
    'とんかつ' => 1000,
    'パスタ' => 400
];

// コードを追記
// 標準関数を使用して、配列を結合($yesterday_mealと$today_meal)
$total_meals = array_merge($yesterday_meal, $today_meal);


echo calc_cal($total_meals);
