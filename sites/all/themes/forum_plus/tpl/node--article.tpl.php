<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<div class="group-head">
  <!--<?php print $user_picture; ?>-->
<?php if ($forum_plus_media_field): ?>
     <?php print($forum_plus_media_field); ?>
      <?php endif; ?>
	  
	<div class="days-ago">
      <?php 
		$days = floor((time() - $node->created)/86400); 
		if ($days == 0) {print("<b>just today!</b>");} 
		elseif ($days > 0) {print("<b>$days days ago</b>");} 
		else {$days = abs($days); print("<b>$days days from now</b>");}
		
		?>
	</div>

      
  <?php if (!$title_link && $title): ?>
       <?php print render($title_prefix); ?>
       <h2<?php print $title_attributes; ?>>
          <?php print $title; ?>
       </h2>
       <?php print render($title_suffix); ?>
      
          <?php if ($display_submitted): ?>
		<div class="submitted">
		  <?php print $submitted; ?>
		</div>
		<?php endif; ?>
  <?php endif; ?>



 
    <?php if ($title_link && $title && !$page): ?>
       <?php print render($title_prefix); ?>
       <h2<?php print $title_attributes; ?>>
          <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
       </h2>
       <?php print render($title_suffix); ?>
      
          <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
    <?php endif; ?>
  <?php endif; ?>


</div>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
