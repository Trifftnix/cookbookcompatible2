<?php

$neuesRezept = $argv[1];
$neueVariablen = file_get_contents($neuesRezept);

$jsontofix = $neueVariablen;
$jsonarray = str_split($jsontofix);
$comma = false;
$index = 0;
$indexcomma = 0;

foreach($jsonarray as $character) {
	if($character == ",") {
		$comma = true;
		$indexcomma = $index;
	} elseif(($character == "\"") and ($comma==true)) {
		$comma = false;
	} elseif(($character == "]") and ($comma==true)) {
		$jsonarray[$indexcomma] = ""; //if they are commas before an [ remove them, so it is json-correct-formatting
	}
	$index = $index+1;
}
$neueVariablen = implode("", $jsonarray);




$neueVariablen= json_decode ($neueVariablen);
//var_dump($neueVariablen);
//Variablen
$Rezeptname = $neueVariablen->name;
if ($Rezeptname != "") {
	$BildnameohneEndung 	= $neueVariablen->image;
	$Zeit 		= $neueVariablen->Zeit;
	$Schwierigkeit = 1;		//schwierigkeit gibt es nicht mehr!

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

	$Portionen 	= $neueVariablen->recipeYield;
	$Zutaten = "\t";
	foreach($neueVariablen->recipeIngredient as $item) {
		$Zutaten = $Zutaten."<div itemprop='ingredients'><dt>".$item->Menge."</dt><dd>".$item->Zutat."</dd></div>\n\t\t\t\t";
	};
	
	$Zubereitungsschritte ="";
	foreach($neueVariablen->recipeInstructions as $item) {
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
