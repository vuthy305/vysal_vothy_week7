<?php 
    /**
     * Advantage of multi-inheritance
     * + Reusable
     * + Reduce rewriting code
     * Disadvantage of multi-inheritance
     * + It's take abit more time to execute the child class becuase it will leap 
     * through to all parents class of its child class and then execute the child class
     * Example: child class inheritance from 10 parents it will go lean through 10 parents class and then it
     * will execute the child class
     */
    class Person{
        public  $name;
        public  $age;
        
        function __construct($name,$age)
        {
            $this->name = $name;
            $this->age = $age;
        }
        public function getPersonInfo(){
            echo $this->name ." "."is"." ".$this->age." "."years old.<br>";
        }
    }
    interface PersonAction{
        public function speak();
    }
    class Lina extends Person implements PersonAction{
        public function speak(){
            echo "Hello<br>";
        }
        public function status(){
            echo "She is single <br>";
        }
    }
    $lina = new Lina("Lina",19);
    $lina ->getPersonInfo();
    $lina ->speak(); 
    $lina ->status();
?>