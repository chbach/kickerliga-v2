<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Winner
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  events: 
    label: Events (yaml)
    type: textarea
    size:  large
