<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type: textarea
    size: medium
  sponsors:
    label: Sponsors
    type: textarea
    size: large
