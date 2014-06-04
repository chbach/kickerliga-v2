<nav class="main-nav">
	<div class="centered cf l-box">
		<a class="main-nav__logo" href="<?php echo $site->url() ?>">
			<img src="<?php echo $site->url() ?>/assets/images/logo.svg" alt="Kickerliga Paderborn">
		</a>
		<ul class="main-nav__links">
			<?php foreach($pages->visible() AS $p): ?>
    		<li <?php echo ($p->isOpen()) ? ' class="active"' : '' ?>><a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
   		 	<?php endforeach ?>
		<li><a href="http://anmeldung.kickerliga-paderborn.de">Benutzerbereich</a></li> 
		</ul>
	</div>
</nav>
