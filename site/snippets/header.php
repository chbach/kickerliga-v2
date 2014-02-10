<!DOCTYPE html>
<html lang="en">
<head>
	
	<title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="http://www.kickerliga-paderborn.de/favicon.ico"/>

	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<?php echo css('assets/css/main.min.css') ?>

</head>

<body>
<?php snippet('menu') ?>
