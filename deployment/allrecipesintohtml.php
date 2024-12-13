<?php

$allrecipes= file_get_contents("deployment/allrecipes.html");



//$neuesRezept = $argv[1];		//über newrecipe.yml für jede json file aufgerufen
//$neueVariablen = file_get_contents($neuesRezept);

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
	$BildnameDiesesRezeptes 	= $Rezeptname;


	$neueRezeptzeile = 
		   "<div class='col-lg-4 col-md-6 col-sm-12 wow fadeIn'>
			  <div class='recipe-item text-center'>
				<a href='recipes/".$Rezeptname."/recipe.html'>
				  <img src='recipes/".$Rezeptname."/thumb.jpg' alt='".$Rezeptname."' />
				</a>
				<br />
				<h3>".$Rezeptname."</h3>
			  </div>
			</div>";


	$allrecipes= $allrecipes.$neueRezeptzeile;

	$fileprefixold = "deployment/";
	$fileprefix = "../"; 							//beim texten mit xampp brauche ich kein Präfix!!!!
	file_put_contents ($fileprefixold."allrecipes.html", $allrecipes);
	$Rezeptkategorie = $neueVariablen->recipeCategory;
	
	if ($Rezeptkategorie == "Backen") {
		$backenrecipes= file_get_contents($fileprefixold."backenrecipes.html");
		$backenrecipes= $backenrecipes.$neueRezeptzeile;
		file_put_contents ($fileprefixold."backenrecipes.html", $backenrecipes);
	}
	if ($Rezeptkategorie == "Fleisch") {
		$fleischrecipes= file_get_contents($fileprefixold."fleischrecipes.html");
		$fleischrecipes= $fleischrecipes.$neueRezeptzeile;
		file_put_contents ($fileprefixold."fleischrecipes.html", $fleischrecipes);
	}
	if ($Rezeptkategorie == "Fisch") {
		$fischrecipes= file_get_contents($fileprefixold."fischrecipes.html");
		$fischrecipes= $fischrecipes.$neueRezeptzeile;
		file_put_contents ($fileprefixold."fischrecipes.html", $fischrecipes);
	}
	if ($Rezeptkategorie == "Snacks") {
		$snacksrecipes= file_get_contents($fileprefixold."snacksrecipes.html");
		$snacksrecipes= $snacksrecipes.$neueRezeptzeile;
		file_put_contents ($fileprefixold."snacksrecipes.html", $snacksrecipes);
	}
	if ($Rezeptkategorie == "Spicy") {
		$spicyrecipes= file_get_contents($fileprefixold."spicyrecipes.html");
		$spicyrecipes= $spicyrecipes.$neueRezeptzeile;
		file_put_contents ($fileprefixold."spicyrecipes.html", $spicyrecipes);
	}
	if ($Rezeptkategorie == "Vegetarisch") {
		$vegetarischrecipes= file_get_contents($fileprefixold."vegetarischrecipes.html");
		$vegetarischrecipes= $vegetarischrecipes.$neueRezeptzeile;
		file_put_contents ($fileprefixold."vegetarischrecipes.html", $vegetarischrecipes);
	}
}
?>
