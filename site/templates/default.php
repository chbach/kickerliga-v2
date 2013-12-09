<?php snippet('header') ?>

<section class="landing-section" role="main">
	<div class="pure-g-r centered">
		<article class="pure-u-2-3 l-box">
		    <h1><?php echo html($page->title()) ?></h1>
		    <?php echo kirbytext($page->text()) ?>
		</article>
		<aside class="pure-u-1-3 l-box">
			<?php snippet('submenu') ?>
		</aside>
	</div>
</section>


<?php snippet('footer') ?>
