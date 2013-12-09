<?php snippet('header') ?>

<?php 
	$news = $page->children()->find("news")->children();
	$topNews = $news->first();
?>

<header class="main-header main-header--teaser">
	<section class="centered pure-g-r">
		<div class="pure-u-1-3 main_header--teaser__splash l-box" >
			<img src="<?php echo $site->url() ?>/assets/images/maennchen.png" alt="maennchen">
		</div>
		<div class="pure-u-2-3 l-box">
			<div class="main-header--teaser__text">
				<h1><?php echo html($topNews->title()) ?></h1>
				<?php echo kirbytext($topNews->text()) ?>
			</div>

			<div class="small-news">
				<?php $index = 0; foreach ($news as $item): if ($index > 0): ?> 
				<a class="news-item" href="<?php echo $item->url() ?>">
					<time class="news-item__time"><?php echo $item->date("d.m.Y") ?></time>
					<h2 class="news-item__heading"><?php echo $item->title() ?></h2>
				</a>
				<?php endif; $index++; endforeach; ?>
			</div>
		</div>
	</section>
</header>

<section class="landing-section" role="main">
	<div class="pure-g-r centered">
		<div class="pure-u-1-3 l-box">
			<h2 class="compact">Termine</h2>
			<?php snippet("termine", array("tplOption" => "teaser")); ?>
			<?php $termine = $pages->find('termine') ?>
			<a class="pure-button pure-button-block"  href="<?php echo $termine->url() ?>">alle anzeigen</a>
		</div>

		<div class="pure-u-1-3 l-box">
			<h2 class="compact">Sei Dabei!</h2>
			<p>Wir sind die Kickerliga Paderborn und machen seit über fünf Jahren die Paderborner Kneipenszene unsicher. </p>

			<ul class="quick-links">
				<li><a class="pure-button" href="#">Spielplan &amp; Tabelle</a></li>
				<li><a class="pure-button" href="#">Kickerliga auf Facebook</a></li>
				<li><a class="pure-button" href="#">Kickern in Paderborn Gruppe</a></li>
			</ul>
		</div>
		
		<aside class="pure-u-1-3 l-box">
			<h2 class="compact">Neu hier?</h2>
			<p>Du willst mitmachen? Kein Problem, schau einfach hier vorbei, um zu sehen, wo gerade etwas abgeht!
			<?php snippet('submenu') ?>
		</aside>
	</div>
</section>
<section class="sponsors pure-g-r centered">
	<div class="pure-u-1 l-box">
		<h3 class="sponsors__heading">Unterstützer der Kickerliga</h3>
		<ul class="sponsors__list">
		<?php 
			$sponsors = yaml($page->children()->find("sponsors")->sponsors());
			$images = $page->children()->find("sponsors")->images();

			foreach ($sponsors as $key => $sponsor):
				$img = $images->find($key);
		?>
			<li class="sponsors__item">
				<a href="<?php echo $sponsor['url']; ?>" target="_blank">
				<img src="<?php echo $img->url(); ?>" alt="<?php echo $img->name(); ?>">
				</a>
			</li>
		<?php 
			endforeach;
		?>
		</ul>
	</div>
</section>


<?php snippet('footer') ?>
