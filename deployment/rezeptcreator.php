<?php

$neuesRezept = $argv[1];
$neueVariablen = file_get_contents($neuesRezept);
$neueVariablen= json_decode ($neueVariablen);
var_dump($neueVariablen);
//Variablen
$Rezeptname = $neueVariablen->Rezeptname;
$BildnameohneEndung 	= $neueVariablen->BildnameohneEndung;
$Zeit 		= $neueVariablen->Zeit;
//Schwierigkeit ist noch nicht umgesetzt
$Portionen 	= $neueVariablen->Portionen;
$Zutaten = "\t";
foreach($neueVariablen->ZutatenEinkaufsliste as $item) {
	$Zutaten = $Zutaten."<div itemprop='ingredients'><dt>".$item->Menge."</dt><dd>".$item->Zutat."</dd></div>\n\t\t\t\t";
};
$Zutaten2 = "\t";
foreach($neueVariablen->Zutatenschonvorhanden as $item) {
	$Zutaten2 = $Zutaten2."<dt>".$item->Menge."</dt>	<dd>".$item->Zutat."</dd>\n\t\t\t\t";
};
$Zubereitungsschritte ="";
foreach($neueVariablen->Zubereitungsschritte as $item) {
	$Zubereitungsschritte = $Zubereitungsschritte."<li>".$item."</li>\n\t\t\t\t";
};


ob_start();
include 'deployment/recipeTemplate.php';
$content = ob_get_contents();
$template=  "recipes/recipe".$BildnameohneEndung.".html";
file_put_contents ($template, $content);

ob_end_clean();	
	
?>