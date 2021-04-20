<?php

$neuesRezept = $argv[1];
$neueVariablen = file_get_contents($neuesRezept);
$neueVariablen= json_decode ($neueVariablen);
//var_dump($neueVariablen);
//Variablen
$Rezeptname = $neueVariablen->Rezeptname;
if ($Rezeptname != "") {
	$BildnameohneEndung 	= $neueVariablen->BildnameohneEndung;
	$Zeit 		= $neueVariablen->Zeit;
	$Schwierigkeit = $neueVariablen->Schwierigkeit;
	$Schwierigkeit = str_replace (",", ".", $Schwierigkeit);
	$Schwierigkeit = round($Schwierigkeit*2)/2;

	$Sterne = "";

	//alle vollen Sterne
	for ($i = $Schwierigkeit; $i>=1; $i--) {
		$Sterne = $Sterne."<i class='fa fa-star' aria-hidden='true'></i>\n";
	} 

	//gibt es einen halben Stern?
	if ($i == .5) {
		$Sterne = $Sterne."<i class='fa fa-star-half-o' aria-hidden='true'></i>\n";
	}

	//leere Sterne auffüllen
	for ($i = (3-$Schwierigkeit); $i>=1; $i--) {
		$Sterne = $Sterne."<i class='fa fa-star-o' aria-hidden='true'></i>\n";
	}

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
}	
?>