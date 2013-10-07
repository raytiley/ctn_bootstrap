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
?>

<div class="banner" style="background-image:url(<?php print $fields['field_ctn_show_banner_image']->content ?>)">
	<div class="container">
		<div class="carousel-caption">
			<h1><?php print $fields['cablecast_show_cg_title']->content; ?></h1>
			<p class="lead">
				<?php print $fields['cablecast_show_comments']->content; ?>
			</p>
			<a href="<?php print $fields['path']->content; ?>" class="btn btn-large btn-primary">Watch Now</a>
		</div>
	</div>
</div>