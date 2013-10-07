<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<div class="front-page-section">
	<ul class="thumbnails">
		<?php foreach($rows as $id => $row): ?>
		  		<?php print $row; ?>
	    <?php endforeach; ?>
	</ul>
</div>