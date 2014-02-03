<?php snippet('header') ?>

<?php
	$season = new KLSeason();
	$matches = $season->getMatches();
	$odd_or_even = "odd";
	$day = ""; 
	$location = "";
?>

<section class="landing-section" role="main">
	<div class="pure-g-r centered">
		<div class="pure-u-1 l-box">
			<h1 class="no-margin"><?php echo html($page->title()); ?></h1>
		</div>
		<div class="pure-u-2-3 l-box">
			<article>
			    <?php echo kirbytext($page->text()); ?>
			</article>

			<?php foreach ($matches as $index => $match ): ?>
			<?php
				$odd_or_even = ('odd' == $odd_or_even) ? 'even' : 'odd';
			?>

			<?php if ($day != $match->day):	$day = $match->day;?>
			<?php if ($day > 1): ?> </table></div><?php endif; ?>

			<div class="spieltag">
				<h3 class="toggle"><?php echo $day ?>. Spieltag</h3>
				<table cellpadding="0" cellspacing="0" class="w100 table">
					<tr>
						<th class="w230p">Team 1</th>
						<th class="w230p">Team 2</th>
						<th class="w80p">Ergebnis</th>
					</tr>
			<?php endif; ?>

					<?php if ($location != $match->location):
						$location = $match->location;
						$odd_or_even = 'even'; ?>
					<tr class="subhead"><td colspan="5">
						<?php echo $location; ?>
						<small><?php echo date("d.m.Y H:i", strtotime($match->date)); ?></small>
					</td></tr>
					<?php endif; ?>
					<tr class="<?php echo $odd_or_even ?>">
						<td><?php echo $match->team1; ?></td>
						<td><?php echo $match->team2; ?></td>
						<td><?php echo $match->sets; ?></td>
					</tr>
			<?php endforeach; ?>
				</table>
			</div>

		</div>
		<div class="pure-u-1-3 l-box">
			<aside>
				<?php snippet('submenu') ?>
			</aside>
		</div>
	</div>
</section>


<?php snippet('footer') ?>
