<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
class Cars {
    public $car;
    public $color;
    public function __construct($car, $color) {
      $this->car = $car;
      $this->color = $color; 
    }
    public function intro() {
      echo "The car's name is {$this->car} and the color is {$this->color}."; 
    }
  }
  
  // Strawberry is inherited from Fruit
  class Volvo extends Cars {
    public function message() {
      echo "Another car name is Volvo "; 
    }
  }
  
  $Volvo = new Volvo ("toyota", "red");
  $Volvo ->message();
  $Volvo ->intro();
?>
</body>

</html>