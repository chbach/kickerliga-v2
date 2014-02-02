<?php 
	$season = new KLSeason();

	$table = $season->getTable();
?>


<?php snippet('header') ?>

<section class="landing-section" role="main">
	<div class="pure-g-r centered">
		<article class="pure-u-2-3 l-box">
		    <h1><?php echo html($page->title()) ?></h1>
		    <?php echo kirbytext($page->text()) ?>

		    <table class="pure-table pure-table-striped">
		    	<thead>
		    	<tr>
		    		<th class="acenter w20p">#</th>
					<th>Name</th>
					<th class="acenter">Spiele</th>
					<th class="acenter">Siege</th>
					<th class="acenter pure-hidden-phone">S&auml;tze</th>
					<th class="acenter pure-hidden-phone">Tore</th>
		    	</tr>
		    	</thead>
		    	<tbody>
		    	<?php foreach ($table as $index => $team): ?>
		    	<tr>
		    		<td><?php echo $index+1 ?>.</td>
		    		<td><?php echo $team->name ?></td>
		    		<td><?php echo $team->num_matches; ?></td>
		    		<td><?php echo $team->num_matches_won; ?></td>
		    		<td class="pure-hidden-phone"><?php echo $team->num_sets_won - $team->num_sets_lost; ?></td>
		    		<td class="pure-hidden-phone"><?php echo $team->num_goals - $team->num_goals_against; ?></td>
		    	</tr>
		    	<?php endforeach; ?>
		    	</tbody>
		    </table>
		</article>
		<aside class="pure-u-1-3 l-box">
			<?php snippet('submenu') ?>
		</aside>
	</div>
</section>


<?php snippet('footer') ?>
