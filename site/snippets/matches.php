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
	<?php $img = ""; if (isset($match['Img'])) { $img = $images->find($match['Img']); } ?>
	<div class="match cf">
		<span class="team"><?php echo $match['Team1']; ?></span>
		<span class="result"><?php if ($img): ?><a href="<?php echo $img->url() ?>" class="fresco"><?php endif; ?> <?php echo ($match['Ergebnis'])? $match['Ergebnis'] : '--:--' ; ?><?php if ($img): ?></a><?php endif; ?></span>
		<span class="team"><?php echo $match['Team2']; ?></span>
	</div>

<?php endforeach; ?>
</section>
