<?php snippet('header') ?>

<section class="landing-section" role="main">
	<div class="pure-g-r centered">
		<div class="pure-u-1 l-box">
			<h1 class="no-margin"><?php echo html($page->title()) ?></h1>
		</div>
		<div class="pure-u-2-3 l-box">
			<article>
				<?php echo kirbytext($page->text()) ?>
				<hr />
			</article>
			<?php
				$first = $page->children()->visible()->flip()->first();
				snippet('matches', array(
					'title' => $first->title(),
					'text' => $first->text(),
					'images' => $first->images(),
					'matches' => yaml($first->matches()
				)));

			?>
			<section class="detailed-results">
			<h3>Detailansicht aller Pokalrunden</h3>
			<ul>
				<?php foreach($page->children()->visible() AS $round): ?>
					<li><a href="<?php echo $round->url() ?>" title="Gehe zu <?php echo $round->title() ?>"><?php echo $round->title() ?></a></li>
				<?php endforeach; ?>
			</ul>
			</section>
		</div>
		<div class="pure-u-1-3 l-box">
			<aside>
				<?php snippet('submenu') ?>
			</aside>
		</div>
	</div>
</section>

<?php snippet('footer') ?>
