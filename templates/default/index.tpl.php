<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" media="screen" href="<?= THEME ?>css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" media="screen" href="<?= THEME ?>css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" media="screen" href="<?= THEME ?>css/style.css"/>
	<? if($_GET['action'] !== 'registration'){ echo "
	<link rel='stylesheet' type='text/css' media='screen' href='". THEME ."css/jquery.formstyler.css'/>
	";	}?>
	<link rel="stylesheet" type="text/css" media="screen" href="<?= THEME ?>css/colorbox/example1/colorbox.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?= THEME ?>css/colorbox/example1/colorbox.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?= THEME ?>css/jcarousel.connected-carousels.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?= THEME ?>css/bootstrapValidator.min.css">


	<script type="text/javascript" src="<?= THEME ?>js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?= THEME ?>js/inputmask/js/jquery.inputmask.bundle.min.js"></script>
	<script type="text/javascript" src="<?= THEME ?>js/inputmask/js/jquery.inputmask-multi.min.js"></script>
	<script type="text/javascript" src="<?= THEME ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= THEME ?>js/jquery.formstyler.min.js"></script>
	<script type="text/javascript" src="<?= THEME ?>js/script.js"></script>
	<script type="text/javascript" src="<?= THEME ?>js/colorbox/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="<?= THEME ?>js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?= THEME ?>js/jcarousel.connected-carousels.js"></script>
	<script type="text/javascript" src="<?= THEME ?>js/BootstrapValidator/bootstrapValidator.min.js"></script>
	<script type="text/javascript" src="<?= THEME ?>js/BootstrapValidator/ru_RU.js"></script>
	<script type="text/javascript" src="<?= THEME ?>js/BootstrapValidator/bootstrap.min.js"></script> <!-- Фреймворк -->
</head>
<body>
<?php include 'page.tpl.php';?>
</body>
</html>