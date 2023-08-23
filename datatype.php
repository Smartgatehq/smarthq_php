<?php

// INTEGER


// $x = 5985;
// var_dump($x);


// STRINGS

// $x = "5985";
// var_dump($x);




// ARRAYS

// $cars = array("Volvo","BMW","Toyota");
// var_dump($cars);


// PHP Object

// class foo
// {
//     function do_foo()
//     {
//         echo "Doing foo.";
//     }
// }
// $bar = new foo;
// $bar->do_foo();






class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();




?>