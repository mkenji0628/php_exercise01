<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operator = $_GET['operator'];

switch ($_GET['operator']) {
    case 'addition':
        $ans = $_GET['num1'] + $_GET['num2'];
        $kigou = '+';
        $tougou = '=';
        break;
    case 'subtraction':
        $ans = $_GET['num1'] - $_GET['num2'];
        $kigou = '-';
        $tougou = '=';
        break;
    case 'multiplication':
        $ans = $_GET['num1'] * $_GET['num2'];
        $kigou = '*';
        $tougou = '=';
        break;
    case 'division':
        $ans = $_GET['num1'] / $_GET['num2'];
        $kigou = '/';
        $tougou = '=';
        break;
    default:
        $ans = '';
        $_GET['num1'] = '';
        $_GET['num2'] = '';
        $kigou = '';
        $tougou = '';
        echo '正しい演算子を指定して下さい';
        break;
}


echo $_GET['num1'] . $kigou . $_GET['num2'] . $tougou . $ans;
