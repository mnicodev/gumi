
<div class="block-activity">
	<div class="entete"><?php print t("interactions"); ?></div>
	<?php foreach($data as $id=>$item): ?>
	<div class="item <?php print $id; ?>">
		<label><?php print $id;?></label>
		<div><?php if((int)$item->data<10):?>0<?php endif; ?><?php print $item->data?></div>
	</div>
	<?php endforeach; ?>
</div>
	
