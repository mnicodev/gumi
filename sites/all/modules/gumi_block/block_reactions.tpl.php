<div class="block-reactions">
	<div class="entete"><?php print t("reactions"); ?></div>
	<?php foreach($data as $id=>$value): ?>
	<div class="item item-<?php print $id; ?>">
		<div>
			<span><img src='/<?php print drupal_get_path("module","gumi_block")."/images/".$id.".png";?>' /></span>
			<label><?php print t($id);?></label>
		</div>
		<div class="score"><?php if((int)$value<10):?>0<?php endif; ?><?php print $value?></div>
	</div>
	<?php endforeach; ?>
</div>
	
