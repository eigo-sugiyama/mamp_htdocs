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
            return $this->price . '<br>';
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
          public function __construct(string $name , int $height , int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }

          //メソッドを定義する
          public function set_height(string $height) {
            $this->height = $height;
          }
          public function show_height() {
            return $this->height . '<br>';
          }
        }

        // Food クラスのインスタンス作成
        $food = new Food("Apple", 100);
        echo "<pre>";
        print_r($food);
        echo "</pre><br>";

        // Animal クラスのインスタンス作成
        $animal = new Animal("Elephant", 300, 5000);
        echo "<pre>";
        print_r($animal);
        echo "</pre><br>";

        // メソッドへのアクセス
        echo "price:" . $food->show_price();
        echo "height:" . $animal->show_height();
        ?>
    </p>
</body>

</html>