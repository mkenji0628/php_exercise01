<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

// コードを追記
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $emai = $_POST['emai'];
    $item_key = $_POST['item_key'];


    if (empty($name)) {
        $err_msg[] = '氏名を入力して下さい';
    }
    if (empty($tel)) {
        $err_msg[] = '電話番号を入力して下さい';
    }
    if (empty($emai)) {
        $err_msg[] = 'メールアドレスを入力して下さい';
    }
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>個人情報を入力してください。</h3>

    // コードを追記

    <form action="" method="post">

        <label for="">氏名</label><br>
        <input type="text" name="name"><br>

        <label for="">電話番号</label><br>
        <input type="text" name="tel"><br>

        <label for="">メールアドレス</label><br>
        <input type="text" name="email"><br>

        <br>
        

        <h3>購入するものを選択してください。</h3>


        <select name="item">
            <?php foreach ($items as $item) : ?>
                <option value="<?= $item ?>"><?= $item ?></option>
            <?php endforeach; ?>
        </select>

        <div class=" submit">
            <input type="submit" value="送信">
        </div>



        // コードを追記
    </form>

</body>

</html>