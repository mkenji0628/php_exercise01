<?php

$score = 60;

if ($score >= 60) {
    echo '合格です';
} elseif (30<=$score && $score < 60) {
    echo '追試です';
} else {
    echo '不合格です';
}







// $scoreが60以上なら「合格です」と出力
// $scoreが30以上60未満なら「追試です」と出力
// $scoreが30未満なら「不合格です」と出力
