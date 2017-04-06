
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
        </div> <!-- jumbotron -->
        <div class="row">
          <?php
        }
        if($i==2||$i==3){
          ?>
          <div class="col-6 col-lg-6">
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h2>
            <?php the_category( " ") ; ?>
            <p><?php the_excerpt(); ?></p>
          </div><!--col-lg-6-->
          <?php
        }
        if($i>3){
          ?>
          <div class="col-6 col-lg-4">
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h2>
            <?php the_category( " ") ; ?>
            <p><?php the_excerpt(); ?></p>
          </div><!-- col-lg-4-->
          <?php
        }
        $i++;
        endwhile;
        else :
          _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;
        ?>
      </div><!--row-->
    </div><!--col-md-12-->
  </div><!--row-offcanvas-->
</div><!--container-->

<?php

get_footer();

?>

