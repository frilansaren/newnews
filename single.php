<?php
get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-md-8">

			<?php
			if ( have_posts() ) : 
				while ( have_posts() ) : 
					the_post();
				get_template_part('content', get_post_format());
				endwhile;
				else :
					_e( 'Sorry, no posts matched your criteria.', 'newnews' );
				endif;
				?>
				</div><!-- /col-md-4 -->
			</div><!-- /row -->
		</div><!-- /container -->

		<?php
		get_footer();