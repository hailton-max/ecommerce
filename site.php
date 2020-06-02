<?php 

use \Lojinha\Page;

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});






 ?>