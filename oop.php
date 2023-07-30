<?php

class calculator{ //this is class
    public $num =5; // property: public/private/protected

   
    function sum(){ // this is method fucntion
        echo "sum".'<br>';
        
    }
}

$cal = new calculator; //object


$cal ->sum();  //methood access
echo $cal ->num; //property access

echo "<hr>";


// $this



class kaj{ //this is class
    public $num =5; // property: public/private/protected
    public $num1 =10;
   
    function koro(){ // this is method fucntion
        echo $this->num + $this->num1;
        
    }
}

$cal = new kaj; //object


$cal ->koro();  //methood access

echo "<hr>";


// constructor

class mehedi{
    public $number1 =0;
    public $number2 =0;

    function __construct($n1,$n2){
        $this->number1=$n1;
        $this->number2=$n2;

    }
    public function sum(){
        echo $this->number1+$this->number2;
    }
}

$cal = new mehedi(15,7);
$cal->sum();





?>