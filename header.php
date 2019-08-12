<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jean-Paul Faguet Governance from Below">
    <meta name="author" content="Jean-Paul Faguet">
    <link rel="shortcut icon" href="http://governancefrombelow.net/wp-content/uploads/2013/12/Social_and_communication-08-16.png">

    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

 <?php wp_head(); ?>
  <body <?php body_class(); ?>>
  <?php include_once("analyticstracking.php") ?>

  <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand text-uppercase" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
    <span>Research on local political economy & development&nbsp&nbsp&nbsp</span>
      <?php
      wp_nav_menu( array(
        'menu'              => 'top_menu',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-govfrombelow-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
      ?>
    </div>
  </nav>

<?php
// Get jumbotron banner (ACF) depending on template
get_template_part('src/components/c-banner');
