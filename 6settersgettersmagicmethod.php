<?php 

//Define a class

use Users as GlobalUsers;

class Users6 {

    private $name;
    private $age;
    
    //constructors are also know as magic methods
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }


    //You can also create your own magic method.
    //Magic methods allow you to check for the property in the class
    //a variable name will be passed to the propery 
    //in out case $name
    public function __get($property){

        //this refers to the class
        if(property_exists($this, $property)){
               return $this->$property;
        }
    }

    //this magic functions sets the value to the property we specify
    public function __set($property, $value){

        //this refers to the class, it checks if the property exist in the class
        //then sets the value if it does and returns the class
        if(property_exists($this, $property)){
          $this->$property = $value;
        }
    }
}

#$user = new Users();
//$user->name = "Dary";

#below line will not work because you cant access private outside of a class
//echo $user->name;

//Name can be set bet instanstiating an object and then calling function
/*
$user = new Users();
$user->setName("Dary");
echo $user->getName();
*/

//First instanstiate the object
//$user = new Users6("Dary", 24);

//Next get the property by name
//echo $user->__get('name');


//First instanstiate the object
$user = new Users6("Daryy", 24);

//use the magic method to set the value by passing property name
$user->__set('name', 'John' );

//Next get the property by name
echo $user->__get('name');