<?php

$content = "";

$allrecipes=  "deployment/allrecipes.html";
file_put_contents ($allrecipes, $content);

file_put_contents ("deployment/backenrecipes.html", "");
file_put_contents ("deployment/fleischrecipes.html", "");
file_put_contents ("deployment/fischrecipes.html", "");
file_put_contents ("deployment/snacksrecipes.html", "");
file_put_contents ("deployment/spicyrecipes.html", "");
file_put_contents ("deployment/vegetarischrecipes.html", "");

$neuesRezept = file_get_contents ("deployment/neuesRezept.json");
file_put_contents ("neuesRezept.json", $neuesRezept);
?>