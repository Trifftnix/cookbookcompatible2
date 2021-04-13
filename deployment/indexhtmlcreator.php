<?php
$allrecipes = file_get_contents("deployment/allrecipes.html");
ob_start();
include 'deployment/indextemplate.php';
$content = ob_get_contents();
$template=  "index.html";
file_put_contents ($template, $content);

ob_end_clean();	



	
?>