<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
          // プロパティを定義する
          public $name;
          public $price;
        
          // コンストラクタを定義する
          public function __construct(string $name , int $price) {
            $this->name = $name;
            $this->price = $price;
          }
        
          //メソッドを定義する
          public function show_price() {
            echo $this->price . '<br>';
          }
        }
        ?>
        <p>
        <?php
        // クラスを定義する
        class Animal {
          // プロパティを定義する
          public $name;
          public $height;
          public $weight;

          // コンストラクタを定義する
          public function __construct(string $name , int $price) {
            $this->name = $name;
            $this->price = $price;
          }

          //メソッドを定義する
          public function set_height(string $height) {
            $this->height = $height;
          }
          public function show_height() {
            echo $this->height . '<br>';
          }
        }

        // Food クラスのインスタンス作成
        $food = new Food("Apple", 100);
        print_r($food);
        echo "\n";

        // Animal クラスのインスタンス作成
        $animal = new Animal("Elephant", 300, 5000);
        print_r($animal);
        echo "\n";
        ?>
    </p>
</body>

</html>