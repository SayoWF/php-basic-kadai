<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PHP課題011</title>
</head>

<body>
    <p>
        <?php
        $product_info = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        //  配列$product_infoの要素を1つずつ順番に出力する
        foreach ($product_info as $key => $value) {
            echo "{$key} : {$value}<br>";
        }
        ?>
    </p>
</body>

</html>