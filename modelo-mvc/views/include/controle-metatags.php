<?php 

if(!@$Url[1]){
	switch (@$Url[0]) {
		case 'index':
			require_once('views/include/codigos-metatags/metatags-index.php');
			break;
		case 'index.php':
			require_once('views/include/codigos-metatags/metatags-index.php');
			break;
		case 'contato':
			require_once('views/include/codigos-metatags/metatags-contato.php');
			break;					

		default:
			require_once('views/include/codigos-metatags/metatags-404.php');
			break;
	}
}