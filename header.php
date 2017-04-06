<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>New News</title>
  <?php wp_head(); ?>
</head><!-- stänger head -->
<body>
  <nav class="navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo bloginfo( 'url' ); ?>"><i class="fa fa-spinner fa-pulse fa-fw"></i>
      <span class="sr-only">Loading...</span> <?php echo bloginfo( 'name' ); ?></a> <!-- font awesome icon ligger här -->

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'headmenu',
          'container'      => false,
          'menu_class'     => 'nav navbar-nav',
          'fallback_cb'    => '__return_false',
          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'          => 2,
          'walker'         => new bootstrap_4_walker_nav_menu()
          ) );
          ?>

          <?php get_template_part('templates/navbar-search'); ?>
        </div> <!-- navbar-collapse -->
  </nav> <!-- navbar -->