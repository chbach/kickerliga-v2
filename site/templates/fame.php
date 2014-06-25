<?php snippet('header') ?>
<section class="landing-section" role="main">
	<div class="pure-g-r centered">
		<div class="pure-u-1 l-box">
			<h1 class="no-margin"><?php echo html($page->title()) ?></h1>
		</div>
		<?php foreach($page->children() as $season): ?>
		<div class="pure-u-1 l-box"><h3 class="no-margin img-list__season-title"><?php echo $season->title(); ?></h3></div>
		
		<?php 
		$events = yaml($season->events);
		foreach ($events as $event): 
			$img = $season->images()->find($event['img']);
		?>
		<?php if ($img): ?>
		<div class="pure-u-1-3 l-box">
			<a class="img-list__item fresco" href="<?php echo $img->url() ?>" data-fresco-group="teams" data-fresco-caption="<?php echo $event['name'] ?>: <?php echo $event['winner'] ?>">
				<div class="img-list__img" style="background-image:url(<?php echo $img->url() ?>)" alt="<?php echo $event['name'] ?>"></div>
				<strong class="img-list__title"><?php echo $event['winner'] ?></strong>
				<span class="img-list__subtitle"><?php echo $event['name'] ?></span>
			</a>
		</div>
		<?php endif; ?>
		<?php endforeach; ?>
		<?php endforeach; ?>
	</div>
</section>


<?php snippet('footer') ?>
