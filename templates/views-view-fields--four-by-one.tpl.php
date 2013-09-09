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
 * <div class="thumbnail">
 * <a  href="[path]">
 *[cablecast_show_thumbnail]
 *<span class="play play-large"></span>
 *</a>
 *<h6 class="thumbnail-title">[title]</h6>
 *<p class="thumbnail-caption">[cablecast_show_comments]</p>
 *</div>
 */
?>
<div class="thumbnail">
	<div class="thumbnail-wrapper">
		<a  href="<?php print $fields['path']->content; ?>">
			<img class="lazy" src="http://placehold.it/360x240"
			data-original="<?php print $fields['cablecast_show_thumbnail']->content; ?>"
			width="360" height="240" />
			<noscript><img src="<?php print $fields['cablecast_show_thumbnail']->content; ?>"
				width="180" height="120" /></noscript>
			<span class="play play-large"></span>
		</a>
	</div>
	<h6 class="thumbnail-title"><?php print $fields['title']->content; ?></h6>
	<p class="thumbnail-caption"><?php print $fields['cablecast_show_comments']->content; ?></p>
</div>