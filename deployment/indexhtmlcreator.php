<?php

$deploymentprefix2 = "";
$prefixDeploymentFolder = "deployment/";


$allrecipes = file_get_contents($prefixDeploymentFolder."allrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."index.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";	
$allrecipes ="";


$allrecipes = file_get_contents($$prefixDeploymentFolder."snacksrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexsnacks.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";
	

$allrecipes = file_get_contents($$prefixDeploymentFolder."backenrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexbacken.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($$prefixDeploymentFolder."fleischrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexfleisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($$prefixDeploymentFolder."fischrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexfisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($$prefixDeploymentFolder."spicyrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexspicy.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($$prefixDeploymentFolder."vegetarischrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexvegetarisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";	
$allrecipes ="";

?>