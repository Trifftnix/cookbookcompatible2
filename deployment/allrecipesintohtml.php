<?php

$allrecipes= file_get_contents("deployment/allrecipes.html");



$neuesRezept = $argv[1];
$neueVariablen = file_get_contents($neuesRezept);
$neueVariablen= json_decode ($neueVariablen);
var_dump($neueVariablen);
//Variablen
$Rezeptname = $neueVariablen->Rezeptname;
$BildnameohneEndung 	= $neueVariablen->BildnameohneEndung;


$neueRezeptzeile = 
	   "<div class='col-lg-4 col-md-6 col-sm-12 wow fadeIn'>
          <div class='recipe-item text-center'>
            <a href='recipes/recipe".$BildnameohneEndung.".html'>
              <img src='recipes/images/".$BildnameohneEndung."resized.jpg' alt='".$Rezeptname."' />
            </a>
            <br />
            <h3>".$Rezeptname."</h3>
          </div>
        </div>";


$allrecipes= $allrecipes.$neueRezeptzeile;


file_put_contents ("deployment/allrecipes.html", $allrecipes);

if ($neueVariablen->backen == "ja") {
	$backenrecipes= file_get_contents("deployment/backenrecipes.html");
	$backenrecipes= $backenrecipes.$neueRezeptzeile;
	file_put_contents ("deployment/backenrecipes.html", $backenrecipes);
}
if ($neueVariablen->fleisch == "ja") {
	$fleischrecipes= file_get_contents("deployment/fleischrecipes.html");
	$fleischrecipes= $fleischrecipes.$neueRezeptzeile;
	file_put_contents ("deployment/fleischrecipes.html", $fleischrecipes);
}
if ($neueVariablen->fisch == "ja") {
	$fischrecipes= file_get_contents("deployment/fischrecipes.html");
	$fischrecipes= $fischrecipes.$neueRezeptzeile;
	file_put_contents ("deployment/fischrecipes.html", $fischrecipes);
}
if ($neueVariablen->snacks == "ja") {
	$snacksrecipes= file_get_contents("deployment/snacksrecipes.html");
	$snacksrecipes= $snacksrecipes.$neueRezeptzeile;
	file_put_contents ("deployment/snacksrecipes.html", $snacksrecipes);
}
if ($neueVariablen->spicy == "ja") {
	$spicyrecipes= file_get_contents("deployment/spicyrecipes.html");
	$spicyrecipes= $spicyrecipes.$neueRezeptzeile;
	file_put_contents ("deployment/spicyrecipes.html", $spicyrecipes);
}
if ($neueVariablen->vegetarisch == "ja") {
	$vegetarischrecipes= file_get_contents("deployment/vegetarischrecipes.html");
	$vegetarischrecipes= $vegetarischrecipes.$neueRezeptzeile;
	file_put_contents ("deployment/vegetarischrecipes.html", $vegetarischrecipes);
}

?>