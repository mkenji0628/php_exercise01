<?php

$num1 = '';
$num2 = '';
$num3 = '';
$err_msg = '';
$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['message1'];
    $num2 = $_POST['message2'];
    $num3 = $_POST['message3'];

    if (empty($num1) || empty($num2) || empty($num3)) {
        $err_msg = '全てに数字を入力してください。';
    } else {
        $goukei = $num1 + $num2 + $num3;
        $msg = '合計値は' . $goukei . 'です。';
    }
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームの練習</title>
</head>

<body>
    <h1>数字を入力してください。</h1>
    <form action="" method="POST">
        <div>
            <?php if ($err_msg) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>

            <label for="">一つめの数字</label><br>
            <input type="number" name="message1"><br>

            <label for="">二つめの数字</label><br>
            <input type="number" name="message2"><br>

            <label for="">三つめの数字</label><br>
            <input type="number" name="message3"><br>
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <?php if (!empty($msg)) : ?>
        <p><?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>
</body>

</html>