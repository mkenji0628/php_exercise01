<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$select_stylist = '';

// ここにコードを追記

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylist">
            <option value="">--希望する美容師のランクを選んでください--</option>
            <option value="dog">Takashi</option>
            <option value="cat">Ken</option>
            <option value="hamster">Kyoutarou</option>
        </select>
        <br>
        <input type="submit" value="送信">
    </form>
    // ここにコードを追記
</body>

<p><?= htmlspecialchars("あなたの担当は{$select_stylist}です", ENT_QUOTES, 'UTF-8') ?></p>

</html>