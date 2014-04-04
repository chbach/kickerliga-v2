<?php snippet('header') ?>
<section class="landing-section" role="main">
	<div class="pure-g-r centered">
		<div class="pure-u-1 l-box">
			<h1><?php echo html($page->title()) ?></h1>
			<?php echo kirbytext($page->text()) ?>
		</div>
		<div class="sponsor-list pure-g-r pure-u-1">
			<?php 
				$sponsors = yaml($page->sponsors());
				$images = $page->images();
				$headline = "";

				foreach ($sponsors as $key => $sponsor):
					$img = $images->find($sponsor['image']);
			?>

			<?php if($sponsor['type'] != $headline):
				$headline = $sponsor['type']; ?>
				<div class="pure-u-1 l-box"><h3 class="sponsor-list__title no-margin"><?php echo $headline ?></h3></div>
			<?php endif; ?>

			<div class="pure-u-1-3 l-box">
				<a href="<?php echo $sponsor['url']; ?>" target="_blank" class="sponsor-list__item">
					<span class="sponsor-list__imgwrap"><span class="sponsor-list__img" style="background-image: url(<?php echo $img->url(); ?>)"></span></span>
					<strong class="sponsor-list__name"><?php echo $sponsor['name'] ?></strong>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>


<?php snippet('footer') ?>
