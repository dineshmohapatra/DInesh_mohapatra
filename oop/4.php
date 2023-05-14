<?php 
    class Employee{
        public static $eid;
        public static $name;

        static function get_info(){
            echo self::$name." ".self::$eid;
        }
    }

    Employee::$name = "james";
    Employee::$eid = 101;
    Employee::get_info();

    
?>