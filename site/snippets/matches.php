<h2><?php echo h($title); ?></h2>
<article>
	<?php echo kirbytext($text); ?>
</article>
<section class="matches">
<?php
	$location = "";

	foreach($matches AS $key => $match): ?>

	<?php if ($location != $match['Location']):
		$location = $match['Location'];
	?>
		<h3><?php echo $location; ?></h3>
	<?php endif; ?>
	<div class="match cf">
		<span class="team"><?php echo $match['Team1']; ?></span>
		<span class="result"><?php echo ($match['Ergebnis'])? $match['Ergebnis'] : '--:--' ; ?></span>
		<span class="team"><?php echo $match['Team2']; ?></span>
	</div>

<?php endforeach; ?>
</section>
