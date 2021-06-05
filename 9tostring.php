<?php 
//The tostring methods allows us to call and object and view its contents as a string

//Define a class



class Users9 {
    private $name;
    private $age;
    
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    //this is a magic function that will be alwayse be called
    public function __toString(){
        return  "Name: " . $this->name . "<br> Age : " . $this->age;
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

$user = new Users9("John", 35);

//Lets print out just the object
echo $user;


