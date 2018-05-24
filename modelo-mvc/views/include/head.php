<?php require_once('views/include/controle-metatags.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<base href="http://<?=$_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']?>">
<link rel="icon" href="views/assets/images/favicon.ico">

<title>Carousel Template for Bootstrap</title>

<!-- Bootstrap core CSS -->
<link href="views/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="views/assets/js/toastr/toastr.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="views/assets/css/carousel.css" rel="stylesheet">
<link href="views/assets/css/form-validation.css" rel="stylesheet">
<?php echo (isset($retorno[0]) ? $retorno[0] : '') ?>