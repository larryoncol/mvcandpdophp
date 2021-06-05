<?php 

//Constructors allows for initialising classes with data

class User {
    
    public $name; 
    public $age;

    //set contructor parameter name and age to class propertie name and age
    public function __construct($name, $age){
  
        $this->name = $name;
        $this->age = $age;
        echo "My constructor name is :" . $this->name; echo "<br>";
        echo "My constructor age is :" . $this->age;
        echo "<br>";
        echo "<br>";
    
    }
    

    //used clean up a constructor after user, resource utilisaion issues
    //Works at the end of the code
    public function __destruct(){
        echo "Destructor Works";
    }

    public function myAge(){

        return "My age from function myAge is" . $this->age;
        

    }


}

//Instantiate and pass into to constuctor
$user = new User("Dary", 24);
echo "My initialised name is :" . $user->name;
echo "<br>";
echo "My initialised age is :" . $user->age;
echo "<br>";
echo "<br>";

echo $user->myAge();
echo "<br>";
echo "<br>";


