<?php
	$goto = $page->children()->first();
	go($goto->url());
?>
