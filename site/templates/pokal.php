<?php snippet('header') ?>
<section class="landing-section" role="main">
	<div class="pure-g-r centered">
		<div class="pure-u-2-3 l-box">
			<?php snippet('matches', array(
			  		'title' => $page->title(),
			  		'text' => $page->text(),
			  		'images' => $page->images(),
			  		'matches' => yaml($page->matches()
			  	)));
			 ?>
		</div>
		<div class="pure-u-1-3 l-box">
			<aside>
				<?php snippet('submenu') ?>
			</aside>
		</div>
	</div>
</section>
<?php snippet('footer') ?>
