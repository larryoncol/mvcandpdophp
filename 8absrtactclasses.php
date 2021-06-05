<?php 

//Abstract class is a way to force any other class that extends it to implement specific methods
//Any class that has at least one abstract method inside of it is an absract class
//An abstract class cannot be instanstiated. The concrete class will need to be instantiated (Which is the class that extends the abstract class)
// You use an abstract class when you need to define specific expecations for a concrete class

//The AbstractClassManager  implements a method "showProject" which accepts a project name
abstract class AbstractClassManager {
     
    abstract protected function showProject();


}

//The concrete class extends the abstract class. Hence, we must implemet the method "showProject"
class Employee extends AbstractClassManager{
     
    public function showProject($project = "Apple"){

        return "I am working on " . $project;
        
    }


    public function startProject($project){

        return $this->showProject($project);
    }
}

$employee = new Employee();
echo $employee->showProject();
//echo $employee->startProject();

