<?php 
    class Student{
        private $name;
        private $roll;

        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function set_roll($roll){
            $this->roll=$roll;
        }
        function get_roll(){
            return $this->roll;
        }
        function set_info($name,$roll){
            $this->name = $name;
            $this->roll = $roll;
        }
        function get_info(){
            return $this->name." ".$this->roll;
    }
    }
    $s = new Student();

    $s->set_name("Sam");
    echo $s->get_name();

    $s->set_roll(1);
    echo $s->get_roll();

    $s->set_info("will",2);
    echo $s->get_info();
?>