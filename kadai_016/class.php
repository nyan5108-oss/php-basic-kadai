<?php
// Foodクラスを作成
class Food {
    private $name;
    private $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name  = $name;
        $this->price = $price;
    }

    // priceの値を出力するメソッド
    public function show_price() {
        echo $this->price . '<br>';
    }
}

// Animalクラスを作成
class Animal {
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name   = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightの値を出力するメソッド
    public function show_height() {
        echo $this->height . '<br>';
    }
}

// インスタンスを作成
$potato = new Food("potato", 250);
$dog    = new Animal("dog", 60, 5000);

// インスタンスの中身を表示
print_r($potato);
echo "<br>";
print_r($dog);
echo "<br>";

// メソッドを実行
$potato->show_price();   // 250
$dog->show_height();     // 60
?>