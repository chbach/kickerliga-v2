<?php snippet('header') ?>
<header class="main-header main-header--custom" style="background-image: url(<?php echo $page->images()->find("teaser.jpg")->url() ?>)">
	<section class="centered pure-g-r">
		<div class="pure-u-1 l-box">
			<article class="main-header__text main-header--custom__text">
				<?php echo kirbytext($page->teaser()) ?>
				<section class="main-header__meta">
					<p class="meta-item"><i class="batch">&#xf05c;</i> <?php echo h($page->time()); ?></p>
					<p class="meta-item"><i class="batch">&#xf07d;</i> <?php echo h($page->location()); ?></p>
				</section>
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
				<?php echo kirbytext($page->sidebar()) ?>
			</aside>
		</div>
	</div>
</section>
<?php if ($page->latlng()): ?>
<div class="pure-g-r stick-to-footer">
	<div class="pure-u-1">
		<?php
			snippet('map', array(
				'address' => $page->latlng(),
				'width'   => '100%',
				'height'  => 240
			));
		?>
	</div>
</div>
<?php endif; ?>

<?php snippet('footer') ?>
