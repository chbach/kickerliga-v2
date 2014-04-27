<?php

class kirbytextExtended extends kirbytext {

  function __construct($text, $markdown=true) {
  
    parent::__construct($text, $markdown);
    $this->addTags('thumb');
    $this->addTags('minigallery');
    $this->addTags('button');
    $this->addAttributes('crop', 'quality', 'titles', 'rel', 'fancybox', 'url');
  
  }

  function button($params) {
    if (!isset($params['class'])) {
      $params['class'] = "";
    }
    $params['class'] .= " pure-button";

    return '<a href="'.$params['url'].'" class="'.$params['class'].'">'.$params['button'].'</a>';
  }
  
  function thumb($params) {
  
    global $site;
  
    $defaults = array(
      'width'   => 200,
      'height'  => 200,
      'crop'    => false,
      'quality' => 100
    );

    $options = array_merge($defaults, $params);
    $thumb   = $params['thumb'];
    $page    = ($this->obj) ? $this->obj : $site->pages()->active();
    $image   = $page->images()->find($thumb);
    
    if(!$image) return false;    
    
    return thumb($image, array(
      'width'   => $options['width'], 
      'height'  => $options['height'],
      'crop'    => $options['crop'], 
      'quality' => $options['quality']
    ));
  
  }

  function minigallery($params) {

    $defaults = array(
      'width'    => 200,
      'height'   => 200,
      'crop'     => false,
      'quality'  => 100,
      'rel'      => "gallery",
      'titles'   => "",
      'fancybox' => "true"
    );

    global $site;

    $options = array_merge($defaults, $params);
    $files = $params['minigallery'];
    $titles = $options['titles'];
    $fancybox = $options['fancybox'];
    $page    = ($this->obj) ? $this->obj : $site->pages()->active();

    $filesArr = explode("|", $files);
    $titlesArr = explode("|", $titles);

    $output  = "<span class=\"minigallery\">";

    foreach ($filesArr as $key => $img) {
      $currentImage =  $page->images()->find($img);

      if ($fancybox == "true") {
        $output .= "<a href=\"".$currentImage->url()."\" class=\"fresco\" rel=\"".$options['rel']."\""; 

        if (count($titlesArr) > 0 && isset($titlesArr[$key]) && $titlesArr[$key] != "")
           $output .=" title= \"".$titlesArr[$key]."\" ";

        $output .= ">";
      }

      $output .= thumb($currentImage, array( 
                                        'width'   => $options['width'], 
                                        'height'  => $options['height'],
                                        'crop'    => $options['crop'], 
                                        'quality' => $options['quality']
                                     ));
      if ($fancybox == "true")
        $output .= "</a>";
    }

    $output .= "</span>";

    return $output;
  }

}

?>
