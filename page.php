<?php
get_header();

if ( have_posts() ) : 
	while ( have_posts() ) : the_post();
?>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-4">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			?>
		</div> <!-- col-md-4 -->
	</div> <!-- row -->
</div> <!-- container -->
<?php
endwhile; 
endif;


get_footer();
