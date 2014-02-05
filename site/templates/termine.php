<?php snippet('header') ?>

<section class="landing-section" role="main">
	<div class="pure-g-r centered">
		<div class="pure-u-1 l-box">
			<h1 class="no-margin"><?php echo html($page->title()) ?></h1>
		</div>
		<div class="pure-u-2-3 l-box">
			<p>Hier findest du alle wichtigen Termine der Kickerliga Paderborn einmal übersichtlich aufgelistet. </p>
			<?php $options = array(
				'lang'      => 'de_DE',
				'timezone'  => 'Europe/Berlin',
				'dateForm'  => '%d.%m.',
				'monthForm' => '%B %Y',
				'hasTime'   => false
			);?>
			<?php calendar(yaml($page->events()), $options, 'div'); ?>
		</div>
		<div class="pure-u-1-3 l-box">
			<aside>
				<article>
					<?php echo kirbytext($page->text()) ?>
				</article>
			</aside>
		</div>
	</div>
</section>


<?php snippet('footer') ?>
