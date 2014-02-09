<?php snippet('header') ?>

<header class="main-header main-header--custom" style="background-image: url(<?php echo $page->images()->find("teaser.jpg")->url() ?>)">
	<section class="centered pure-g-r">
		<div class="pure-u-1 l-box">
			<article class="main-header__text main-header--custom__text">
				<?php echo kirbytext($page->teaser()) ?>
			</article>
		</div>
	</section>
</header>
<section class="landing-section" role="main">
	<div class="pure-g-r centered">    
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
	</div>
</section>


<?php snippet('footer') ?>
