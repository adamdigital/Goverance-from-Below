<?php get_header(); ?>

<div class="container">

<ol class="breadcrumb">
            <li><a href="/dpd/">Decentralization and Popular Democracy</a></li>
            <li class="active"><a href="/case-studies/">Case studies</a></li>
          </ol>

      <div class="row featurette">

<div class="col-xs-1 col-sm-1 col-md-2"></div>
        <div class="col-xs-10 col-sm-10 col-md-8">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
           
<a href="https://twitter.com/share" data-count="none"><img src="http://projectdev.co/wp-content/uploads/2013/10/twitter_bird_logo2.png" width=24px height=14px> TWEET THIS</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>
        <?php endwhile; else: ?>
  <p><?php _e('Sorry, this page does not exist.'); ?></p>
  <?php endif; ?>
          <div class="col-xs-1 col-sm-1 col-md-4"></div>
      </div>
      <!-- /END THE FEATURETTES -->
</div>

<?php get_footer(); ?>