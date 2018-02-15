<div class="leaderboard">
	<?php foreach($data as $item): ?>
	<div class="item">
		<span class="picture"><img src="<?php print $item["user"] ;?>" /></span>
		<span class="score"><?php print $item["score"]." ".(((int)$item["score"]>1)?t("points"):t("point"));?></span>
	</div>
	<?php endforeach; ?>
</div>
