<?php 
    class Student{
        private $name,$roll;

        function __construct($name,$roll){
            $this-> name=$name;
            $this->roll = $roll;
            echo "Student Object is created";
        }

        function __destruct()
        {
            echo "<br> Obj Destroyed";
        }
    }


    $s = new Student("John",1);
    unset($s);
    var_dump($s);
    ?>