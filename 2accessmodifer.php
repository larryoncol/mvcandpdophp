<?php 

//Access modifiers =  Public, Private, Protected
//Public the property or method can be accessed from everywhere. This is default
//Private the property or method can ONLY be accessed within the class
//the property or method can be accessed within the class and by classes derived from that class
//The main reason to use different access modifiers is to prevent other classes from being able to access eachother
//this also help compartmentalisation and security
class Users {
      private $name;
      
      protected function sayHello(){
            return "Hello";
      }

}

$user = new Users();
$user->name = "Dary";
echo $user->sayHello();