<?php
/*
Template Name: About JP
*/
?>
<?php get_header(); ?>

 <div class="container"> 
 <div class="row"> 
   <div class="col-8">
    <div class="row">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="col-sm-12">
                <h2>Biography</h2>
                <p><?php the_content(); ?></p>
              </div>
              <?php endwhile; else: ?>
              <?php endif; ?>
    </div>
    <hr>
    <div class="row">
    <div class="col-sm-6">

      <h3>Research interests</h3>
      <ul>
        <li>Closed to-open-access transitions</li>
        <li>The social and organizational underpinnings of the Eastern European 'colour revolutions'</li>
        <li>The political, economic and social determinants of civil violence</li>
        <li>Is there 'social' enterprise?</li>
        <li>Is there 'structural power'?</li>
        <li>Endogenous institutional change</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <h3>Publications</h3>
      <p>Dr Faguet has had published a wide range of books, special issues, journal articles, chapters and policy literature. See the <a href="http://www.lse.ac.uk/internationalDevelopment/whosWho/faguetjp.aspx">complete list</a> of recent and selected publications on LSE's who's who.</p>
    </div>
    </div>

    <br>
    <hr>
    <img class="img-responsive" src="http://governancefrombelow.net/wp-content/uploads/2015/02/Altiplano-8-JP-rock-sml.jpg" width="635" height="423" alt="Jean-Paul rocking it in the field">

   </div><!--/ col sm 7 (center column) -->

    <div class="spacer-vertical"></div>
            
    <div class="col-4">

    <?php 

    $aside_jp = get_field('aside_jp');

    if ( $aside_jp ) {
      echo $aside_jp;
    }
    ?>
   </div><!--/ row end -->
    </div><!--/ col 4 sidebar end -->
</div><!--/ row-->

<?php get_footer(); ?>