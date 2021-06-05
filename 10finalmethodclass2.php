<?php

//Final Classes cannot be extended or overwritten
class User10 {
    public $name = "John";
    public $age;   

    final public function printName($name){
          return "My name is " . $name;
    }
}

class Manager extends User10{
    public $name = "David";
     
    // we cannot overite the the printName from User10 because it is set to final. See below code
    /*
       final public function printName($name){
       return "Hi,  " . $name;
    }
    */
}

// you can extend or overwrite properties of a final class 
//but you cannot change the method because it is set to final
// In this case we call the method and simply pass a value
$manager = new Manager();
echo $manager->printName("Dary");