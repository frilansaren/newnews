<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">

			<h1 class="searchpage">Search page</h1>
			<p> <?php printf(__('Searching for ... <i>%s</i> </p>'), get_search_query() ); ?></p>
			<?php
			if(have_posts() ) {
				while (have_posts() ) {
					the_post();
					?>

					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h2>
					<?php the_category( " ");

					the_excerpt();
					?>

					<hr>
					
					<?php
				}
			} ?>

		</div> <!-- col-md-8 -->
		<div class="col-md-4">
			<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar' ); ?>
			<?php endif; ?>
		</div><!-- col-md-4 -->
	</div><!-- row -->
</div> <!-- container -->
<?php get_footer(); ?>