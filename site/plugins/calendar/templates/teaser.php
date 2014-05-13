<?php
/**
 * This is a template for a list output of the first 3 future events.
 */
?>

<ul class="termine-small">
<?php 
//number of events to show
$max = 4;
$count = 0;

foreach ($this->events as $event):

	if ($count >= $max) break;
	$begin = $event->getBegin();
	$end = $event->getEnd();
	
	//skip all past events
	if (($end && $end[0] >= time()) || $begin[0] >= time()):
		$count++;
?>
	<li class="termine-small__item<?php echo ($count>=$max) ? ' last' : '';?>">
		<time  class="termine-small__date" datetime="<?php echo gmdate("Y-m-d\TH:i:s\Z", $begin[0]);?>"><?php echo strftime($this->dateFormat, $begin[0]); ?><?php echo ($end)? ' - '.strftime($this->dateFormat, $end[0]) : ''; ?></time>
<?php $info = $event->getInfo(); ?>
		<span class="termine-small__desc"><?php echo $info['title'] ?></span>	
	</li>
<?php endif; ?>
<?php endforeach; ?>
</ul>
