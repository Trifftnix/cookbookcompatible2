<?php

$allrecipes = file_get_contents("deployment/allrecipes.html");
ob_start();
include 'deployment/indextemplate.php';
$content = ob_get_contents();
$template=  "index.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";	
$allrecipes ="";

	
	
$allrecipes = file_get_contents("deployment/backenrecipes.html");
ob_start();
include 'deployment/indextemplate.php';
$content = ob_get_contents();
$template=  "indexbacken.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents("deployment/fleischrecipes.html");
ob_start();
include 'deployment/indextemplate.php';
$content = ob_get_contents();
$template=  "indexfleisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents("deployment/fischrecipes.html");
ob_start();
include 'deployment/indextemplate.php';
$content = ob_get_contents();
$template=  "indexfisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents("deployment/snacksrecipes.html");
ob_start();
include 'deployment/indextemplate.php';
$content = ob_get_contents();
$template=  "indexsnacks.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents("deployment/spicyrecipes.html");
ob_start();
include 'deployment/indextemplate.php';
$content = ob_get_contents();
$template=  "indexspicy.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents("deployment/vegetarischrecipes.html");
ob_start();
include 'deployment/indextemplate.php';
$content = ob_get_contents();
$template=  "indexvegetarisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";	
$allrecipes ="";
?>