<?php 
	$events = $pages->find("termine")->events();

	$options = array(
	    'lang'      => 'de_DE',
	    'timezone'  => 'Europe/Berlin',
	    'dateForm'  => '%d.%m.%Y',
	    'monthForm' => '%B %Y',
	    'hasTime'   => false
	);

	calendar(yaml($events), $options, $tplOption); 
?>
