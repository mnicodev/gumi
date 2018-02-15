<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
  global $_SESSION,$post_num;
  $class="premier";

?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="views-row <?php if ($classes_array[$id] && isset($_SESSION['post_num'])) {  $classes_array[$id] .' '.((!$_SESSION['post_num']++)?$class:'');  } ?>">
  
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
