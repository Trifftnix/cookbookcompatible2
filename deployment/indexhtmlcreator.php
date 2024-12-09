<?php

$deploymentprefix2 = "";
$prefixDeploymentFolder = "deployment/";


$allrecipes = file_get_contents($$prefixDeploymentFolder = "deployment/";."allrecipes.html");
ob_start();
include $$prefixDeploymentFolder = "deployment/";.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."index.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";	
$allrecipes ="";


$allrecipes = file_get_contents($$prefixDeploymentFolder = "deployment/";."snacksrecipes.html");
ob_start();
include $$prefixDeploymentFolder = "deployment/";.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexsnacks.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";
	

$allrecipes = file_get_contents($$prefixDeploymentFolder = "deployment/";."backenrecipes.html");
ob_start();
include $$prefixDeploymentFolder = "deployment/";.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexbacken.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($$prefixDeploymentFolder = "deployment/";."fleischrecipes.html");
ob_start();
include $$prefixDeploymentFolder = "deployment/";.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexfleisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($$prefixDeploymentFolder = "deployment/";."fischrecipes.html");
ob_start();
include $$prefixDeploymentFolder = "deployment/";.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexfisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($$prefixDeploymentFolder = "deployment/";."spicyrecipes.html");
ob_start();
include $$prefixDeploymentFolder = "deployment/";.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexspicy.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($$prefixDeploymentFolder = "deployment/";."vegetarischrecipes.html");
ob_start();
include $$prefixDeploymentFolder = "deployment/";.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexvegetarisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";	
$allrecipes ="";

?>