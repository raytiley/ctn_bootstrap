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

<div class="carousel-inner">
	<?php $chunked_rows = array_chunk($rows, 4); ?>
	
		<?php foreach($chunked_rows as $count => $chunk): ?>
			<div class="item <?php if ($count == 0): print 'active'; endif;?>">
				<ul class="thumbnails">
			    	<?php foreach ($chunk as $id => $row): ?>
				      	<li class="span3">
				      		<?php print $row; ?>
				      	</li>
			    	<?php endforeach; ?>
		    	</ul>
			</div>
		<?php endforeach; ?>
</div>