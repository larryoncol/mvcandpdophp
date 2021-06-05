<?php 

//The main concept behind static properties and methods is that 
// - static proprties or methods are not part when instanstiated
// - they can only be accessed at the class level
class Users7{
    //only one copy exist because it cannot be changed. it can be accessed directly from the class
    public static $nextId=0;

    private  $myId;

    public  $nextId1=8;

/*  
    public static function printId($id){
        return $id;
    }
*/
    
//method to return the value of a static property
// you must use the self keyword
    public static function printId(){
        return "User id is: " . self::$nextId;
    }
}


/*
$user = new Users7();
$user->myId = 10;
echo $user->myId;
*/

//the double colon means we are accessing the class direcly rather than creating an instance
#Users7::$nextId;
#echo Users7::$nextId;

//the below will not work because $myId is not static, only static methods or properties can be accessed directly
#echo Users7::$myId;

//Calling a static method, directly from the class
//echo Users7::printId(20);

//Calling a static method, directly from the class
echo Users7::printId();

$user = new Users7();
echo $user->nextId1;