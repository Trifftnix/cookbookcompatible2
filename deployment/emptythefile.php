<?php

$content = "";

$prefixForFiles = "deployment/";
$prefixForFiles = "";				// SPÄTER für github wieder diese Zeile löschen

$allrecipes=  $prefixForFiles."allrecipes.html";
file_put_contents ($allrecipes, $content);

file_put_contents ($prefixForFiles."backenrecipes.html", "");
file_put_contents ($prefixForFiles."fleischrecipes.html", "");
file_put_contents ($prefixForFiles."fischrecipes.html", "");
file_put_contents ($prefixForFiles."snacksrecipes.html", "");
file_put_contents ($prefixForFiles."spicyrecipes.html", "");
file_put_contents ($prefixForFiles."vegetarischrecipes.html", "");

/*									// Funktion wieder einführen!					
$neuesRezept = file_get_contents ("Rezepte/neuesRezept.json");
if (file_exists("Rezepte/neuesRezept.json") == FALSE) {
	file_put_contents ("Rezepte/neuesRezept.json", $neuesRezept);
}*/
?>