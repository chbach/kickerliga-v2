<?php 
	$season = new KLSeason();

	$table = $season->getTable();
?>


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
		    	<?php $imgUrl = "http://tabelle.kickerliga-paderborn.de/photos/".$team->photo; ?>
		    	<tr <?php if ($index == 9): ?>class="double-border"<?php endif; ?>>
		    		<td><?php echo $index+1 ?>.</td>
		    		<td><a class="tooltip fresco" <?php if (str::trim($team->photo) && file_exists($imgUrl)): ?> href="<?php echo $imgUrl ?>" data-fresco-group="teams" data-fresco-caption="<?php echo $team->members ?>"<?php endif; ?> title="<?php echo $team->members ?>"><?php echo $team->name ?></a></td>
		    		<td class="acenter"><?php echo $team->num_matches; ?></td>
		    		<td class="acenter"><?php echo $team->num_matches_won; ?></td>
		    		<td class="pure-hidden-phone acenter">
		    			<?php
		    				$sets_diff = $team->num_sets_won - $team->num_sets_lost;

		    				echo ($sets_diff > 0)? "+" : "";
		    				echo $sets_diff;
		    			?>
		    		</td>
		    		<td class="pure-hidden-phone acenter">
		    			<?php
		    				$goals_diff = $team->num_goals - $team->num_goals_against;

		    				echo ($goals_diff > 0)? "+" : "";
		    				echo $goals_diff;
		    			?>
		    		</td>
		    	</tr>
		    	<?php endforeach; ?>
		    	</tbody>
		    </table>
		</div>
		<div class="pure-u-1-3 l-box">
			<aside>
				<?php snippet('submenu') ?>
			</aside>
		</div>
	</div>
</section>


<?php snippet('footer') ?>
