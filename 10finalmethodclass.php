<?php

//Final Classes cannot be extended or overwritten
final class User10 {
    public $name = "John";
    public $age;   
}

class Manager extends User10{
    public $name = "David";
}

// you cannot extend or overwrite properties of a final class beciase it is set to final
$manager = new Manager();
echo $manager->name;