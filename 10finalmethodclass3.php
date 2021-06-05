<?php

//Final Classes cannot be extended or overwritten

final class User10 {
    public $name = "John";
    public $age;   

    final public function printName($name){
          return "My name is " . $name;
    }
}


// you can directly instantiate a final class
// but you cannot change the method because it is set to final. Use abstract class if you want to change the method
// In this case we call the method and simply pass a value
$user = new User10();
echo $user->printName("Dar");


