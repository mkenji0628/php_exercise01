<?php

$score = 100;

switch ($score) {
    case '100':
        echo 'あなたのテストの点数は'.$score.'点で、判定はＡです。';
        break;
    case '99':
        echo 'あなたのテストの点数は'.$score.'点で、判定はＡです。';
        break;
    case '98':
        echo 'あなたのテストの点数は'.$score.'点で、判定はＡです。';
        break;
    case '97':
        echo 'あなたのテストの点数は'.$score.'点で、判定はＡです。';
        break;
    case '96':
        echo 'あなたのテストの点数は'.$score.'点で、判定はＡです。';
        break;
    case '95':
        echo 'あなたのテストの点数は'.$score.'点で、判定はＡです。';
        break;
    case '83':
        echo 'あなたのテストの点数は' . $score . '点で、判定はＢです。';
        break;
    case '79':
        echo 'あなたのテストの点数は' . $score . '点で、判定はＣです。';
        break;
    case '63':
        echo 'あなたのテストの点数は' . $score . '点で、判定はＤです。';
        break;
    default:
        echo 'あなたのテストの点数は' . $score . '点で、判定はＦです。';
        break;
}