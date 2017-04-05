
<?php 

get_header();

?>

<div class="container">

  <div class="row row-offcanvas row-offcanvas-right">

    <div class="col-12 col-md-12">
        <?php
        $i = 1;
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        if($i==1){
        ?>
        <div class="jumbotron">
        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h1>
        <?php the_category( " ") ; ?>
        <p><?php the_excerpt(); ?></p>
      </div>
      <div class="row">
      <?php
        }
        if($i==2||$i==3){
        ?>
        <div class="col-6 col-lg-6">
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h2>
          <?php the_category( " ") ; ?>
          <p><?php the_excerpt(); ?></p>
          <p><a class="readmore" href="<?php the_permalink(); ?>" role="button">Read more &raquo; &raquo;</a></p>
        </div><!--/span-->
        <?php
        }
        if($i>3){
          ?>
        <div class="col-6 col-lg-4">
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h2>
          <?php the_category( " ") ; ?>
          <p><?php the_excerpt(); ?></p>
          <p><a class="readmore" href="<?php the_permalink(); ?>" role="button">Read more &raquo; &raquo;</a></p>
        </div><!--/span-->
        <?php
        }
        $i++;
        endwhile;
        else :
          _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;
        ?>
      </div><!--/row-->
    </div><!--/span-->
  </div><!--/span-->
</div><!--/row-->

<?php

get_footer();

?>

