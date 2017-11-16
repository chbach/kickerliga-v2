<?php snippet('header') ?>

<?php
	$season = new KLSeason($page->seasonid);
	$matchdays = $season->getMatches();
	$odd_or_even = "odd";
	$number = 0;
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

			<?php foreach ($matchdays as $index => $matchday ): ?>
			<?php
				$odd_or_even = ('odd' == $odd_or_even) ? 'even' : 'odd';
			?>

			<?php if ($number != $matchday->number): ?>

			<?php if ($number != 0): ?>
					</tbody>
				</table>
			</div>
			<?php endif; ?>


			<?php $number = $matchday->number; ?>
			<div class="spieltag">
				<h3 class="toggle"><?php echo $matchday->number ?>. Spieltag</h3>
				<table class="pure-table pure-table-striped" style="display: none">
					<thead>
					<tr>
						<th class="w230p">Team 1</th>
						<th class="w230p">Team 2</th>
						<th class="w80p">Ergebnis</th>
					</tr>
					</thead>
					<tbody>
			<?php endif; ?>
					<tr class="subhead">
						<td colspan="3">
							<?php echo $matchday->location; ?>
							<small><?php echo date_format(new DateTime($matchday->date, new DateTimeZone('Europe/Berlin')), "d.m.Y H:i"); ?></small>
						</td>
					</tr>
					<?php foreach($matchday->matches as $match): ?>
					<tr class="<?php echo $odd_or_even ?>">
						<td><?php echo $match->team_1; ?></td>
						<td><?php echo $match->team_2; ?></td>
						<td><?php echo $match->sets; ?></td>
					</tr>
					<?php endforeach; ?>

			<?php endforeach; ?>
					</tbody>
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

<script type="text/javascript">

$(document).ready(function() {

	$(".spieltag table").hide();

	$(".spieltag h3.toggle").click(
		function (event) {
			$(this).parent(".spieltag").children("table").fadeToggle();
		}
	);
});

</script>
<?php snippet('footer') ?>
