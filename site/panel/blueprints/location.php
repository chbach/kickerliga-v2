<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  time: 
  	label: Time
  	type: text
  location: 
  	label: Location
  	type: text
  teaser: 
  	label: Teaser
  	type: textarea
  	size: medium
  text:
    label: Text
    type:  textarea
    size:  large
  sidebar: 
  	label: Sidebar
  	type: textarea
  	size: medium
  latlng:
    label: Latitude/Longitude
    type: text
