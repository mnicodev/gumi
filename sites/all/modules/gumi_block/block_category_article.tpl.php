
<ul class="menu">
	<?php foreach($liste as $item):  ?>
		<li <?php if($tid==$item->tid): ?>class="active"<?php endif;?>><a href="/<?php print $language->language;?>/<?php print drupal_get_path_alias('taxonomy/term/'.$item->tid); ?>"><?php print $item->name ?></a></li>
	<?php endforeach;?>
</ul>
