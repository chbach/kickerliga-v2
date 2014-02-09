<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  teaser: 
  	label: Teaser
  	type: textarea
  	size: medium
  text:
    label: Text
    type:  textarea
    size:  large
