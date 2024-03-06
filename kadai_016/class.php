<?php
// Foodのクラスを作成
class Food {
  // プロパティを定義
  private $name;
  private $price;

  // コンストラクタを定義する
  public function __construct(string $name,int $price) {
    $this -> name = $name;
    $this -> price = $price;
  }

  // メソッドを定義する
  public function show_price() {
    echo $this -> price . '<br>';
  }
}

// Animalのクラスを作成
class Animal {
  // プロパティを定義
  private $name;
  private $height;
  private $weight;

  // コンストラクタを定義する
  public function __construct(string $name,int $height,int $weight) {
    $this -> name = $name;
    $this -> height = $height;
    $this -> weight = $weight;
  }

  // メソッドを定義する
  public function show_height() {
    echo $this -> height . '<br>';
  }
}

// インスタンス化する
$food = new Food ('meet', 1500);

$animal = new Animal ('dog', 7 ,30);

// インスタンス $food と $animal のプロパティの値を出力する
print_r($food);
echo '<br>';

print_r($animal);
echo '<br>';

// メソッドへのアクセス
$food -> show_price();
$animal -> show_height();
?>