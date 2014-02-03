<?php snippet('header') ?>

<section class="landing-section" role="main">
	<div class="pure-g-r centered">
		<div class="pure-u-1 l-box">
			<h1 class="no-margin"><?php echo html($page->title()) ?></h1>
		</div>
		<div class="pure-u-2-3 l-box">
			<article>
					<?php echo kirbytext($page->text()) ?>
			</article>
		</div>
		<div class="pure-u-1-3 l-box">
			<aside>
				<?php snippet('submenu') ?>
			</aside>
		</div>
		<div class="pure-u-1 l-box">
			<?php
				snippet('map', array(
					'address' => '51.721867, 8.751875',
					'width'   => '100%',
					'height'  => 240
				));
			?>
		</div>
	</div>
</section>

<?php snippet('footer') ?>
