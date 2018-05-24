<?php 

define('REQUIRE_PATH', 'views/');
$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index.php' : $getUrl);

$Url = explode('/', $setUrl);