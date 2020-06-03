<?php

class animal{
             private $tipo;
             private $nome;
             
public function __construct($tipo,$nome){
             $this->tipo = $tipo;
             $this->nome = $nome;
             echo("animal criado\n");
   }
   
public function __destruct(){
            echo("animal morto\n");
   }
   
   
 public function correr(){

            echo("correndo \n");
   }
   
public function getTipo(){
    return $tipo;
   }
   
public function setCor($tipo){
     $this->tipo = $tipo;
   }
   
public function getNome(){
     return $nome;
   }
   
public function setPorte($nome){
     $this->nome = $nome;
   } 
 }

?>