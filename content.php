	<h1> <?php the_title(); ?></h1>
	<?php
	the_content();
	?>

	<div class="photo float-right">
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail('post-feature-image');
	}
	?>
	</div>
	<div class="post-meta">
		Author: <?php the_author(); ?> | Created: <?php the_date(); ?>
	</div>