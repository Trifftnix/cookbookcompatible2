<?php


$allrecipes= file_get_contents("deployment/allrecipes");



$neuesRezept = $argv[1];
$neueVariablen = file_get_contents($neuesRezept);
$neueVariablen= json_decode ($neueVariablen);
var_dump($neueVariablen);
//Variablen
$Rezeptname = $neueVariablen->Rezeptname;
$BildnameohneEndung 	= $neueVariablen->BildnameohneEndung;


$neueZeile = "/t'Rezeptname': '".$Rezeptname."',/n/t'BildnameohneEndung'".$BildnameohneEndung.",/n";

$allrecipes= $allrecipes.$neueZeile;


file_put_contents ("deployment/allrecipes", $allrecipes);

	
?>