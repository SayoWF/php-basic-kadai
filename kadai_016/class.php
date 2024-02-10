<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PHP基礎編課題016</title>
</head>

<body>
    <p>
        <?php
        // Foodのクラスを定義する
        class Food {
            //プロパティの定義
            private $name;
            private $price;

            // メソッドを定義する
            public function set_price(int $price) {
                $this->price = $price;
            }

            public function show_price() {
                echo $this->price . '<br>';
            }
            

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

        }

        // Animalのクラスを定義する
        class Animal {
            //プロパティの定義
            private $name;
            private $height;
            private $weight;

            // メソッドを定義する
            public function set_hight(int $height) {
                $this->height = $height;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $food = new Food('potato', 250);
        $animal = new Animal('dog', 60, 2500);

         // インスタンスの各プロパティの値を出力する
        print_r($food);

        echo '<br>';

        print_r($animal);

        echo '<br>';

       // メソッドにアクセスして実行する
       $food->show_price();
       $animal->show_height();

        ?>
    </p>
</body>

</html>