<?php
/*
Template Name: About JP
*/
?>
<?php get_header(); ?>

 <div class="container"> 

   <div class="col-sm-7">
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

   </div><!--/ col sm 7 (center column) -->

    <div class="spacer-vertical"></div>
            
    <div class="col-sm-4 well pull-right">
      <div class="col-sm-12">
        <h3>Contact</h3>
        <address>
          <strong>London School of Economics and Political Science</strong><br>
          Room: CON8.06, Connaught House<br>
          <abbr title="Fax">F:</abbr> +44 (0) 20 7955 6844
        </address>
        <p>Also follow me on <a href="http://uk.linkedin.com/pub/jean-paul-faguet/36/79b/768" target="_blank">Linkedin</a></p>
      </div>
      <div class="col-sm-12">
        <h3>Links &amp; affiliations</h3>
        <ul>
          <li><a href="http://www.lse.ac.uk/home.aspx" target="_blank">London School of Economics and Political Science</a></li>
          <li><a href="http://www.columbia.edu" target="_blank">Columbia University<a/></li>
          <li><a href="http://policydialogue.org" target="_blank">PolicyDialogue.org</a></li>
        </ul>
      </div>
      <div class="col-sm-12">
        <h3>CV</h3>
        <ul>
          <li><a href="http://governancefrombelow.net/wp-content/uploads/2013/11/jean-paul-faguet-cv.pdf" target="_blank">Jean-Paul's CV</a></li>
        <ul>
      </div>
    </div><!--/ col 4 sidebar end -->
    <div class="col-sm-4 well pull-right">
      <h3>PhD Graduates and Current Students</h3>
      <p>Alongside co-authors, my former and current PhD students are at the core of a research community striving to push out the boundaries of political economy on the fundamental causes of development and non-development, and pioneering Q2 methods for subnational analysis.</p> 
      <a href="/grads-students/" class="btn btn-default">View Graduate and student list</a>
    </div>

</div><!--/ row-->

<?php get_footer(); ?>