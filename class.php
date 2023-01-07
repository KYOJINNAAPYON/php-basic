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
    class Product {
      // プロパティを定義する
      public $name;

      // メソッドを定義する
      public function set_name(string $name) {
        $this->name = $name;
        }
      public function show_name() {
        echo $this->name . '<br>';
        }
    }

    // インスタンス化する
    $coffee = new Product();

    // メソッドにアクセスして実行する
    $coffee->set_name('コーヒー');
    $coffee->show_name();

    // インスタンス化する
    $shampoo = new Product();

    // プロパティにアクセスし、値を代入する
    $shampoo->name = 'シャンプー';

    // プロパティにアクセスし、値を出力する
    echo $shampoo->name;
    ?>
  </p>

  <p>
    <?php
    // クラスを定義する
    class User {
      // プロパティを定義する 
      private $name;
      private $age;
      private $gender;

      // コンストラクタを定義する
      public function __construct(string $name, int $age, string $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
      }
    }

    // インスタンス化する
    $user = new User('侍太郎', 36, '男性');

    // インスタンス$userの各プロパティの値を出力する
    print_r($user);
    ?>
  </p>

  <p>
    <?PHP
    class Food {
      private $name;
      private $weight;
      private $taste;
      private $color;

      public function __construct($name, $weight, $taste, $color) {
        $this->name = $name;
        $this->name = $weight;
        $this->taste = $taste;
        $this->color = $color;
      }

      public function showFood() {
        echo "食べ物の名前は{$this->name}です。<br>重さは{$this->weight}グラムです。<br>味は{$this->taste}です。<br>色は{$this->color}です。<br>";
      }
    }

    echo "test class1<br>";
    $sushi = new Food("お寿司", "50", "美味しい", "色々");
    $sushi->showFood();

    echo "<br />test class2 <br />";
    $ramen = new Food("ラーメン", "300", "濃厚な豚骨味", "ちゃいろ");
    $ramen->showFood();

    echo "<br />test class3 <br />";
    $chocolate = new Food("チョコレート", "50", "あまーい", "ブラウン");
    $chocolate->showFood();
    ?>
  </p>
 </body>

 </html>
