<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            function sort_2way($array, $order) {
                if ($order == true) {                
                echo '昇順にソートします。<br>'; 
                sort($array);
                
                } else {
                echo '降順にソートします。<br>';
                rsort($array);
                
                }

                foreach ($array as $val) {
                    echo $val . '<br>';
                }
            }
            
            // ソートする配列を宣言
            $nums = [15, 4, 18, 23, 10 ];
            $array = $nums;


            //関数を呼び出す
            $order = true;
            sort_2way($nums, $order);

            $order = false;
            sort_2way($nums, $order);
                   
        ?>
    </p>
</body>

</html>