<?php

$content = "";

$prefixDeploymentFolder = "deployment/";

$allrecipes=  $prefixDeploymentFolder."allrecipes.html";
file_put_contents ($allrecipes, $content);

file_put_contents ($prefixDeploymentFolder."backenrecipes.html", "");
file_put_contents ($prefixDeploymentFolder."fleischrecipes.html", "");
file_put_contents ($prefixDeploymentFolder."fischrecipes.html", "");
file_put_contents ($prefixDeploymentFolder."snacksrecipes.html", "");
file_put_contents ($prefixDeploymentFolder."spicyrecipes.html", "");
file_put_contents ($prefixDeploymentFolder."vegetarischrecipes.html", "");

/*									// Funktion wieder einführen!					
$neuesRezept = file_get_contents ("Rezepte/neuesRezept.json");
if (file_exists("Rezepte/neuesRezept.json") == FALSE) {
	file_put_contents ("Rezepte/neuesRezept.json", $neuesRezept);
}*/
?>