<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jean-Paul Faguet Governance From Below">
    <meta name="author" content="Jean-Paul Faguet">
    <link rel="shortcut icon" href="<?php bloginfo('url')?>/wp-content/uploads/2013/12/Social_and_communication-08-16.png">

    <title><?php wp_title('|', 1, 'right'); ?> <?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

 <?php wp_head(); ?>
  <body <?php body_class(); ?>>
  <?php include_once("analyticstracking.php") ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e('Toggle Navigation', 'theme-textdomain'); ?>">
        <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
  <a class="navbar-brand" href="/">Governance from Below</a>
  <div class="sub-nav-title">Research on local political economy & development</div>

    <div class="collapse navbar-collapse" id="navbar-content">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'menu_id'        => 'primary-menu',
            'container'      => false,
            'depth'          => 2,
            'menu_class'     => 'navbar-nav ml-auto',
            'walker'         => new Bootstrap_NavWalker(),
            'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
        ]);
        ?>
  </div>
  </div>
  </nav>

<?php
// Get jumbotron banner (ACF) depending on template
get_template_part('src/components/c-banner');
