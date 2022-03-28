<?php

echo "Ejericio Patron Singleton"."<br>"."<br>";

class Tigger {

private static $tiggerInstance;	

private function __construct() {
        echo "Building character...1" . PHP_EOL;
}

public function roar() {
        echo "Grrr_1!" . PHP_EOL;
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

public static function metodo(){
    var_dump(self::$tiggerInstance);

}


public static function getCounter (){
    
    
}

}

// $Tigger1 = tigger::getInstance();
// $Tigger2 = tigger::getInstance();
// $Tigger3 = tigger::getInstance();


$Tigger1 = tigger::getInstance();
$Tigger1->roar(); 
$Tigger1->metodo();

$Tigger2 = tigger::getInstance();
$Tigger1->roar(); 
$Tigger2->metodo();

$Tigger1->roar(); 
$Tigger3 = tigger::getInstance();
$Tigger3->metodo();






?>
