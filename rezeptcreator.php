<?php
/*$teststring = "Dies ist ein Testsatz!";
$file = fopen('Textdateien/test.txt', 'a');
ob_start();
echo 
fwrite ($file, $teststring);
	fclose($file);
*/
	
	

$neuesRezept = "neuesRezept.json";
$neueVariablen = file_get_contents($neuesRezept);
$neueVariablen= json_decode ($neueVariablen);
var_dump($neueVariablen);
//Variablen
$Rezeptname = $neueVariablen->Rezeptname;
$BildnamemitEndung 	= $neueVariablen->BildnamemitEndung;
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
include 'recipeTemplate.php';
$content = ob_get_contents();
$template=  "recipe".$Rezeptname .".html";
file_put_contents ($template, $content);

ob_end_clean();	
	
?>