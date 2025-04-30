<?php


class car{
    public $color;
    public $model;


    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }

    public function message(){
        return "My car is a " . $this->color . " " . $this->model;
    }
}


$mycar = new car("black", "Mahendra");
echo $mycar->message();
?>


<?php

class Greeting{
    public function sayHello(){
        echo "Hello, World";
    }
}
?>

<?php

$greet = new Greeting();
$greet -> sayHello();

?>


<!----------------------------------------------------------------------------------------------------------------------------------------->


<?php
class tGreeting {
    public function sayHello() {
        echo "Hello, World!";
    }
}
?>
//create  an object and call the method 
<?php
$greet = new Greeting();
$greet->sayHello();
?>

//if the function needs parameters
<?php
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }
}
$calc = new Calculator();
echo $calc->add(5, 10); // Outputs: 15
?>

//calling a static method
<?php
class Math {
    public static function square($x) {
        return $x * $x;
    }
}


