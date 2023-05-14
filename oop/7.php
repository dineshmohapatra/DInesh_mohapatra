<?php 
    class Student{
        protected $name;
        protected $roll;


        function __constructor($n,$r){
            $this->name = $n;
            $this->roll = $r;
        }
    }

    class MCA extends Student{
        protected $branch;

        function __construct(){
            $this->branch = "MCA";
        }
    }

    class FirstMCA extends MCA{
        protected $year;

        function __construct($n, $r){
            $this->year = "1st";
            parent::__construct();
            Student::__constructor($n, $r);
        }

        function get_info(){
            echo $this->name." ".$this->roll." ".$this->branch." ".$this->year;

        }
    }

    $sam= new FirstMCA("Sam", 1);
    $sam->get_info();
?>