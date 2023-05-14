<?php 
    class Student{
        protected $roll;
        protected $name;

        function __construct($r,$n){
            $this->name = $n;
            $this->roll = $r;
        }
    }


    class MCA extends Student{
        protected $branch;

        function __constructor($roll,$name){
            $this->branch = "MCA";
            parent::__construct($roll,$name);
        }

        function display(){
            echo $this->name." ".$this->roll." ".$this->branch;
        }
    }

    $s1 = new MCA(1,"Lily");
    $s1->display();
    ?>