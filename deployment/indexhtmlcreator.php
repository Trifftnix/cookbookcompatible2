<?php

$deploymentprefix = "deployment/";
$deploymentprefix = ""; 				//SPÄTER WIEDER LÖSCHEN!!
$deploymentprefix2 = "../";


$allrecipes = file_get_contents($deploymentprefix."allrecipes.html");
ob_start();
include $deploymentprefix.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."index.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";	
$allrecipes ="";


$allrecipes = file_get_contents($deploymentprefix."snacksrecipes.html");
ob_start();
include $deploymentprefix.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexsnacks.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";
	

$allrecipes = file_get_contents($deploymentprefix."backenrecipes.html");
ob_start();
include $deploymentprefix.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexbacken.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($deploymentprefix."fleischrecipes.html");
ob_start();
include $deploymentprefix.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexfleisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($deploymentprefix."fischrecipes.html");
ob_start();
include $deploymentprefix.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexfisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($deploymentprefix."spicyrecipes.html");
ob_start();
include $deploymentprefix.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexspicy.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($deploymentprefix."vegetarischrecipes.html");
ob_start();
include $deploymentprefix.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexvegetarisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";	
$allrecipes ="";

?>