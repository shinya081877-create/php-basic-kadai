<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
<?php
class Food {
    private $name;   // ←ここをprivateに
    private $price;  // ←ここをprivateに

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function set_price(int $price){
        $this->price = $price;
    }

    public function show_price(){
        echo $this->price . '<br>';
    }

    public function getPrice(){
        return $this->price;
    }
}

class Animal {
    private $name;    // ←ここをprivateに
    private $height;  // ←ここをprivateに
    private $weight;  // ←ここをprivateに

    public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function set_height(int $height){
        $this->height = $height;
    }

    public function show_height(){
        echo $this->height . '<br>';
    }

    public function getHeight(){
        return $this->height;
    }
}

$food = new Food('potato', 250);
print_r($food);
echo '<br>';

$animal = new Animal('dog', 60, 5000);
print_r($animal);
echo '<br>';

echo $food->getPrice();
echo '<br>';

echo $animal->getHeight();
echo '<br>';
?>
  </p>
</body>
</html>