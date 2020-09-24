<?php

 class Square {

   public $side;


   public function __construct($side) {

     $this -> side = $side;

   }

   public function getArea() {

     return $this -> side * $this -> side;

   }

   public function getPerimeter() {

     return $this -> side * 4;

   }

   public function __toString() {

     return "Square area: " . $this -> getArea() . "<br>"
          . "Square perimeter: " . $this -> getPerimeter();
   }
 }

 class Cube extends Square {



   public function getSurface() {

     return $this -> getArea() * 6;

   }

   public function getVolume() {

     return $this -> getArea() *  $this -> side;

   }

   public function __toString() {

     return "Cube surface: " . $this -> getSurface() . "<br>"
          . "Cube volume: " . $this -> getVolume();

   }

 }


 $square1 = new Square(5);
 $square2 = new Square(15);


 $cube1 = new Cube(5);
 $cube2 = new Cube(15);

 echo "Square 1" . "<br><br>" . $square1 . "<br><br>"
    . "Square 2" . "<br><br>" . $square2;

 echo "<br><br>";

 echo "Cube 1" . "<br><br>" . $cube1 . "<br><br>"
    . "Cube 2" . "<br><br>" . $cube2;
