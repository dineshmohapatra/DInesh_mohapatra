<?php 
    class Student{
        protected $roll;
        protected $name;

        function set_roll_name($r,$n){
            $this->name = $n;
            $this->roll = $r;
        }
    }

    class MCA extends Student{
        protected $branch;

        function __construct($roll,$name){
            $this->set_roll_name($roll,$name);
            $this->branch = "MCA";
        }

        function display(){
            echo $this->name." ".$this->roll." ".$this->branch;
        }
    }

    $s1 = new MCA(1,"Lily");
    $s1->display();

?>