<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
 global $post_num;
$data=array();

?>
<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

<?php 
if($id=="nid") $nid=strip_tags($field->content);
$data[$id]=array(
	"label"=>$field->label_html,
	"value"=>$field->content,
	"prefix"=>$field->wrapper_prefix,
	"suffix"=>$field->wrapper_suffix,
);
?>

<?php endforeach; ?>

<?php

	//if(!$post_num) print "<div class='premier'>";
	//print "<div class='open-post' data-href='".drupal_get_path_alias("node/".$nid)."'>";
	print $data["field_image"]["prefix"];
	print "<div class='open-post' data-href='".drupal_get_path_alias("node/".$nid)."'>";
	print $data["field_image"]["value"];
	print "</div>";
	print $data["field_image"]["suffix"];
	print "<div class='group-data'>";
	
	print $data["created"]["prefix"];
	print $data["created"]["value"];
	print $data["created"]["suffix"];
	
	print $data["field_category"]["prefix"];
	print $data["field_category"]["value"];
	print $data["field_category"]["suffix"];
	
	print $data["created_1"]["prefix"];
	print $data["created_1"]["value"];
	print $data["created_1"]["suffix"];
	
	
	
	print $data["title"]["prefix"];
	print $data["title"]["value"];
	print $data["title"]["suffix"];
	print $data["body"]["prefix"];
	print $data["body"]["value"];
	print $data["body"]["suffix"];
	print "</div>";
	//print "</div>";
	//if(!$post_num) print "</div>";
	$post_num++;
?>
