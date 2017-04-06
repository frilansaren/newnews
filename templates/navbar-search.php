<div class="search">
	<button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'b4st') ?>" class="btn btn-outline-info my-2 my-sm-0 float-right"><i class="fa fa-search"></i></button><!-- söknappen -->
	<form class="form-inline my-2 my-lg-0 float-right" style="display: none;" id="searchform" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input class="form-control mr-sm-2" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
	</form> <!-- sökrutan -->
</div> <!--search-->