<?php 

//Define a class

use Users as GlobalUsers;

class Userss {
    private $name;
    private $age;
    
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }


    public function getName(){

        return $this->name;
    }

      
    public function setName($name){

        $this->name = $name;

    }


    public function getAge(){

        return $this->age;
    }

      
    public function setAge($age){

        $this->age = $age;

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

//Name and Age be passed when the object is being instantiated
$user = new Userss("Dary", 24);
echo $user->getAge();
echo $user->getName();