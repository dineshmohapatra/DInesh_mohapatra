<?php
    class Complex{
        private $real;
        private $img;

        function __construct($r=0,$i=0){
            $this->real = $r;
            $this->img = $i;
        }

        function display(){
            echo $this->real. "+" .$this->img."i";
        }


        function add(Complex $a,Complex $b){
            $this->real = $a->real + $b->real;
            $this->img  = $a->img + $b->img;
        }
    }


    $c1  = new Complex(1,3);
    $c2 = new Complex(2,5);
    $c3 = new Complex();
    $c3->add($c1,$c2);

    echo "Sum = ";
    $c3->display();

?>