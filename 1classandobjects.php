<?php 

//Define a class

class Users {
      //$name is object propertery
      //Access modifeier is public, can be access from anywhere inside your code
      public $name;


      //sayHello() is object method
      //Access modifeier is public, can be access from anywhere inside your code
      public function sayHello(){

          //this->name refer to our property name
          return $this->name . " Says Hello";

      }

      
}


//Instanstiate user object from User class
$user = new Users();

//$name object propertery of the instantiated class "user" can be access directly
$user->name  = "Dary";
echo "<br>";

//sayHello() object method of the instantiated class "user" can be access directly
echo $user->sayHello();