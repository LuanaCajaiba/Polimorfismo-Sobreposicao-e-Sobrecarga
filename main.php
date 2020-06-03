<?php
require_once 'animal.php';
require_once 'reptil.php';

$tatu = new animal("mamifero","tião");

$tatu->Semsom("Sem som");

$cobra = new reptil();

$cobra->Semsom();

?>