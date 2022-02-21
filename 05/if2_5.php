<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

$n ='の試験は';
$d ='です。';

foreach ($subjects as $subject) {

    switch ($subject) {
        case '数学':
            echo $subject .$n.'明日'.$d . '<br>';
            break;
        case '英語':
            echo $subject . $n . '明後日' . $d . '<br>';
            break;
        case '理科':
            echo $subject . $n . '明々後日' . $d . '<br>';
            break;
        case '社会':
            echo $subject . $n . '昨日' . $d . '<br>';
            break;
        case '国語':
            echo $subject . $n . '中止' . $d . '<br>';
            break;
    }
}
