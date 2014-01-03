<?php get_header('default'); ?>

    <!-- Feature
    ================================================== -->

<div class="bgchile feature-type">
  <div class="spacer-vertical"></div>
 <div class="container"> 

  <div class="row">

    <div class="col-xs-9 col-sm-11 col-md-9 col-lg-7">
            <h2>Decentralization and Popular Democracy: Governance from Below in Bolivia</h2>
            <p class="lead hidden-xs">Jean-Paul Faguet uses the remarkable case of Bolivia, a radical reformer over two decades, to investigate what happens when a country decentralizes. <a href="/dpd/">Read more</button></a></p>
            <a href="/buy-now"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-book"></span> BUY NOW (out in paperback!)</button></a> 
  <div class="spacer-vertical"></div>
</div>
<div class="col-xs-3 col-sm-1 col-md-3 col-lg-5"></div>
   
  </div><!--/row-->
  <div class="spacer-vertical"></div>
 </div><!--/container-->

</div><!--/row-->

    <!-- Main content
    ================================================== -->

    <div class="container">

      <!-- Twitter or social media icons
    ================================================== -->

       <hr>

      <div class="row">
        <div class="col-sm-5 col-xs-5"></div>
        <div class="col-sm-3 col-xs-3"><a href="https://twitter.com/GovFromBelow"><img width="26" height="22" alt="Twitter GovfromBelow" src="http://governancefrombelow.net/wp-content/uploads/2013/12/Twitter_logo_blue1.png"> @GovFromBelow</a></div>
        <div class="col-sm-5 col-xs-4"></div>
      </div>  

      <hr>

       <!-- Updates and talks
    ================================================== -->

      <div class="row">


        <div class="col-sm-6 col-md-4 col-lg-4">
          <?php query_posts('cat=7&showposts=4'); ?>
            <h3>Book launches &amp; talks</h3>
            <hr>
            <?php while (have_posts()) : the_post(); ?>
            <ul class="list-unstyled">
            <li><h4><strong><?php the_date('M j, Y'); ?></strong><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4></li>
          </ul>
            <?php endwhile; ?>
            <br>
            <a href="/book-launches-and-talks/" class="btn btn-default">View all</a>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-6 col-md-3 col-lg-4">
          <?php query_posts('cat=2&showposts=1'); ?>
            <h3>Updates</h3>
            <hr>
            <?php while (have_posts()) : the_post(); ?>
            <h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
            <?php endwhile; ?>
            <br>
            <a href="/updates/" class="btn btn-default">View all</a>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4 col-md-5 col-lg-4 homepage-gallery-positioning hidden-sm hidden-xs">
           <div class="spacer-vertical"></div>
           <?php echo do_shortcode('[print_gllr id=351]'); ?>
          <a href="/photos/" class="btn btn-default">View all photos</a>
        </div><!-- /.col-sm-4 -->

      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row">

     

        <div class="col-md-7">
          <h3>About the Governance from Below website</h3>
          <p>This website supports
        Decentralization and Popular Democracy, and related research projects by <a href="/jean-paul/">Jean-Paul Faguet</a> and his 
        <a href="/grads-students/">colleagues</a>. It includes additional material from the book 
        project, such as a 
        <a href="/dpd-bonus-chapters/">bonus 
        web chapter</a> on seven further
        <a href="/case-studies/">
        case studies</a>, graphs, charts, PPT presentations, and video 
        and audio from lectures. It also provides detailed research 
        materials that may be of use to readers, such as
        <a href="/data/">
        databases</a>, questionnaires, video, and images.  New 
        material on the book, and from new research projects, will be 
        added gradually as it becomes available.</p>
        <br>
        <h3>Awards this research has won</h3>
        <ul>
          <li>LSE Historic Theses Project – selected as an LSE PhD thesis of historic significance, 2010</li>
          <li>Corporación Andina de Fomento International Research Paper Prize, 2008</li>
          <li>LSE-STICERD New Researcher Award, 2006-2008</li>
          <li>British Academy Small Research Grant, 2006-2008</li>
          <li>DFID-Crisis States Programme Research Grant, 2001-2005</li>
          <li>World Bank Research Committee Award for Participatory Planning and Decentralization in Bolivia, 1997-2001</li>
          <li>William Robson Memorial Prize for best PhD dissertation at the LSE, 2002</li>
          <li>Overseas Research Scholarship - national (UK) PhD award, 1996-98</li>
        </ul>
        </div>
        <div class="col-md-5">
          <a href="https://maps.google.com/maps/ms?msid=202661256224975151523.000464c8d6358f8a05317&msa=0"><img class="featurette-image img-rounded thumbnail img-responsive hidden-xs" src="http://governancefrombelow.net/wp-content/uploads/2013/11/map-of-bolivia.jpg" alt="Map of Bolivia" width="500px" height="500px"></a>
        </div>
      </div>
      

      <hr class="featurette-divider">

      <div class="row">

        <div class="col-md-12 well">
               <p>This website and much of the research on it are supported by the 
                generosity of Niko Vardapetyan. The Niko Vardapetyan Research Award 
                supports studies of the evolution and reform of economic and political 
                systems. Niko Vardapetyan, the CFO of Geotransgaz Group, studied Global 
                Market Economics at the LSE. He is a firm believer that the challenges 
                of global instability call for imaginative thinking about our economies 
                and institutions through research unconstrained by traditional 
                paradigms.
              </p>
        </div>

</div>
</div>

      <!-- /END THE FEATURETTES -->

<?php get_footer(); ?>