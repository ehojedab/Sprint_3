<?php

echo "Ejericio Patron Singleton"."<br>"."<br>";

class Tigger {

    private static $tiggerInstance;	//Variable control instancia de la Clase Tigger.
    public static $counter=0; //Variable contador del metodo roar() de la Clase ---(self:: sobre la clase) --- Tigger.
   
      


    private function __construct() {
        echo "Building character...1"."<br>"."<br>";
       
    }

    public function roar() {
        echo "Grrr_1!"."<br>"."<br>";
        self::$counter++;    
        
    }

    public static function getInstance(){
 
    /*if(!isset(self::$tiggerInstance)){
        self::$tiggerInstance = new Tigger;
    }
    return self::$tiggerInstance;*/

    if(!self::$tiggerInstance){
        self::$tiggerInstance = new self();
    }
    return self::$tiggerInstance;
   
    }

    /*public function metodo(){
    var_dump(self::$tiggerInstance);
    }*/


    public static function getCounter (){
        
        echo "Tigger ha rugido ".self::$counter." Veces";
   
    }
    
}



// $Tigger1 = tigger::getInstance();
// $Tigger2 = tigger::getInstance();
// $Tigger3 = tigger::getInstance();


$Tigger1 = tigger::getInstance();
$Tigger1->roar(); 
$Tigger1->roar(); 
$Tigger1->roar(); 


//$Tigger1->metodo();

$Tigger2 = tigger::getInstance();
$Tigger2->roar(); 
//$Tigger2->metodo();


$Tigger3 = tigger::getInstance();
$Tigger3->roar(); 
$Tigger3->roar(); 
$Tigger3->roar(); 
$Tigger3->getCounter(); 



//$Tigger3->metodo();






?>
