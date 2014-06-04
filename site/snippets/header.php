<!DOCTYPE html>
<html lang="en">
<head>
	
	<title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" type="image/x-icon" sizes="any" href="//www.kickerliga-paderborn.de/favicon.ico" />

	<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
	<?php echo js("assets/js/jquery.tooltipster.min.js") ?>
	<?php echo js("assets/js/fresco.js") ?>
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,300" rel="stylesheet" type="text/css" media="all" />
	<?php echo css("assets/css/fresco/fresco.css") ?>
	<?php echo css("assets/css/main.min.css") ?>

</head>

<body>
<?php snippet('menu') ?>
