<?php
get_header();
?>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-9">


			<h1 class="text-underline"><?php single_cat_title(); ?></h1>
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h2>
			<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			?>
			<div class="post-meta">
				Author: <?php the_author(); ?> | Created: <?php the_time('D j F Y'); ?>
			</div> <!-- post-meta -->
			<?php
			the_excerpt();
			?>
			<hr>
			<?php
			endwhile;
			else :
				_e( 'Sorry, no posts matched your criteria.', 'newnews' );
			endif;
			?>
		</div><!-- /col-md-8 -->
	</div><!-- /row -->
</div><!-- /container -->

<?php
get_footer();