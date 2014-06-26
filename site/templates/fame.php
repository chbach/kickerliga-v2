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
			$captions = $event['captions'];
			$images = $season->children()->find($event['images'])->images();
			$img = $images->first();
		?>
		<?php if ($img): ?>
		<div class="pure-u-1-3 l-box">
			<a 
				class="img-list__item fresco" 
				href="<?php echo $img->url() ?>" 
				data-fresco-group="<?php echo $event['images'] ?>" 
				data-fresco-caption="<?php if (array_key_exists($img->filename, $captions)) { echo $captions[$img->filename()]; } ?>"
				data-fresco-group-options="ui: 'inside'"
			>
				<div class="img-list__img" style="background-image:url(<?php echo thumb($img, array('width' => 640), false) ?>)" alt="<?php echo $event['name'] ?>"></div>
				<strong class="img-list__title"><?php echo $event['winner'] ?></strong>
				<span class="img-list__subtitle"><?php echo $event['name'] ?></span>
			</a>
			<div class="hidden">
			<?php 
			$i = 0;
			foreach ($images as $image): ?>
				<?php if ($i > 0): ?>
				<a 
					href="<?php echo $image->url(); ?>" 
					class="fresco" 
					data-fresco-group="<?php echo $event['images'] ?>" 
					data-fresco-caption="<?php if (array_key_exists($image->filename, $captions)) { echo $captions[$image->filename()]; } ?>"
					data-fresco-group-options="ui: 'inside'"
				><?php echo $i ?></a>
				<?php endif; $i++; ?>
			<?php endforeach; ?>
			</div>
		</div>
		<?php endif; ?>
		<?php endforeach; ?>
		<?php endforeach; ?>
	</div>
</section>


<?php snippet('footer') ?>
