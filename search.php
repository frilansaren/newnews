<?php 

get_header();

?>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-9">

		<?php

		if(have_posts() ) {
			while (have_posts() ) {
				the_post();
				?>

				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h2>

				<?php
				the_content();
				?>

				<hr>

				<?php
			}
		}

		?>

		</div>
	</div>
</div>

<?php
get_footer();

?>