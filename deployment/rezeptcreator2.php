<?php

//$neueVariablen = file_get_contents(__DIR__.'\..\recipes\Blaetterteig mit Apfelmus\recipe.json');
//$neueVariablen = file_get_contents(__DIR__.'\..\recipes\Chili\recipe.json');

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

echo $Rezeptname;
if ($Rezeptname != "") {
	$BildnameohneEndung 	= $Rezeptname."/full.jpg";		//ordner noch angeben!
	$Portionen 	= $neueVariablen->recipeYield;
	$Schwierigkeit = 1;							//aktuell kaputt
	
	$Zeitinterval = new DateInterval($neueVariablen->totalTime);		//ISO8601 Zeitformat akzeptieren
	$Zeit = $Zeitinterval->format('%h:%i h');							// Auf z.B. 0:35h  formatieren
	echo $Zeit;
		
	
	$Zutaten = "\t";
	foreach($neueVariablen->recipeIngredient as $item) {
		$Zutaten = $Zutaten."<div itemprop='ingredients'><dt></dt><dd>".$item."</dd></div>\n\t\t\t\t";
	};
	echo $Zutaten;
	$Zubereitungsschritte ="";
	foreach($neueVariablen->recipeInstructions as $item) {
		$Zubereitungsschritte = $Zubereitungsschritte."<li>".$item."</li>\n\t\t\t\t";
	};
	echo $Zubereitungsschritte;

	ob_start();
	include 'deployment/recipeTemplate.php';
	$content = ob_get_contents();
	$template=  "recipes/".$Rezeptname."/recipe.html";
	echo $template;
	file_put_contents ($template, $content);

	ob_end_clean();	
}	
?>
