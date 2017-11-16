<?php
	$season = new KLSeason($page->seasonid());

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
					<th class="acenter">Punkte</th>
					<th class="acenter pure-hidden-phone">S&auml;tze</th>
					<th class="acenter pure-hidden-phone">Tore</th>
		    	</tr>
		    	</thead>
		    	<tbody>
		    	<?php foreach ($table as $index => $team): ?>

		    	<tr <?php if ($index == 9): ?>class="double-border"<?php endif; ?>>
		    		<td><?php echo $index+1 ?>.</td>
		    		<td>
	    			<?php if ($team->photo_url): ?>
	    				<a class="fresco" href="//anmeldung.kickerliga-paderborn.de<?php echo $team->photo_url ?>" data-fresco-caption="<?php echo $team->members ?>" data-fresco-group="teamphotos"  data-fresco-group-options="ui: 'inside'"><?php echo $team->name ?></a>
	    			<?php else: ?>
						<a class="tooltip" title="<?php echo $team->members ?>"><?php echo $team->name ?></a>
					<?php endif; ?>
		    		</td>
		    		<td class="acenter"><?php echo $team->num_matches; ?></td>
		    		<td class="acenter"><?php echo $team->points; ?></td>
		    		<td class="pure-hidden-phone acenter">
		    			<?php
		    				$sets_diff = $team->sets_combined;

		    				echo ($sets_diff > 0)? "+" : "";
		    				echo $sets_diff;
		    			?>
		    		</td>
		    		<td class="pure-hidden-phone acenter">
		    			<?php
		    				$goals_diff = $team->goals_combined;

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
