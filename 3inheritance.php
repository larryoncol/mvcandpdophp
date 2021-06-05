<?php 
//Allows child class to interit from parent class
//Protected or Private Access modifiers cannot be inherited

//Use properties/methods of an existing class (Parent class)
//Difference parent class and child class
//e.g Employee inherits from person 
//e.g Manager inherits from person
//e.g Unique properties and methods can be added to child class in addition to peroperties and methods inherited from the parent class

//The advantage of inheritance is reducing duplication


//Base or Parent Class
class Users {

    public $name;
    public $email;

    public function welcomeMessage(){
        return "Have a good working day!";
    }
}


//Child Class NOTE: Could also be created in another file
//extend is used to inherit from the User class
class Admin extends Users {
   public $level;

}

//We instantiate the user object from User class
$user = new Users();
$user->name = "Dary";
$user->email = "Dary@gmail.com";
echo $user->name . "" . $user->email;
echo "<br>";

//We instantiate the admin object from admin class
//Admin class extends the user object
$admin = new Admin();
$admin->name = "John";
$admin->email = "John@mail.com";
$admin->level = "SuperAdmin";
echo $admin->name . " " . $admin->email . " " . $admin->level;
echo "<br>";
echo $admin->welcomeMessage();
