<?php 

    require_once 'animal.php';

class reptil extends animal{
   public function __construct(){
    echo("reptil nasceu\n");
  }
  
  
  public function emitirSom (){
    echo("Som de réptil\n");
  }
     }
?>