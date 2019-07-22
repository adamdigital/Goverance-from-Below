

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
          <?php query_posts('cat=7&showposts=2'); ?>
            <h3>Invited lecture dates / <a href="/book-launches-and-talks/">View all</a></h3>
            <hr>
            <?php while (have_posts()) : the_post(); ?>
            <ul class="list-unstyled">
            <li><h4><?php the_date('M j, Y'); ?></h4>
            <h5><?php echo get_post_meta($post->ID, 'Venue', true); ?></h5>
            <p>"<?php the_title(); ?>"</p>
            </li>
          </ul>
        <hr class="featurette-divider-home-lecture-list">
            <?php endwhile; ?>
           
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-6 col-md-3 col-lg-4">
          <?php query_posts('cat=2&showposts=1'); ?>
            <h3>Online lectures &amp; events</h3>
            <hr>
            <iframe width="360" height="203" src="//www.youtube.com/embed/q1rBuPdLqKk" frameborder="0" allowfullscreen class="video-responsive"></iframe>
            <br>
            <br>
            <a href="#myModal" role="button" class="hidden-xs btn btn-default" data-toggle="modal">View video playlist</a>
            <a href="https://www.youtube.com/watch?v=q1rBuPdLqKk&list=PLBHIFEylkPqMHKVK8l72IA2lmNfFqaHdX" class="btn btn-default hidden-sm hidden-md hidden-lg">View YouTube playlist</a>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4 col-md-5 col-lg-4 homepage-gallery-positioning hidden-sm hidden-xs">
           <div class="spacer-vertical"></div>
           <div class="spacer-vertical"></div>
           <?php echo do_shortcode('[print_gllr id=351]'); ?>
           <br>
          <a href="/photos/" class="btn btn-default">View all photos</a>
        </div><!-- /.col-sm-4 -->

      </div><!-- /.row -->


      <!-- START of FEATURETTE -->
    <hr class="featurette-divider">

    <div class="row">

     <div class="col-md-5">
          <img class="featurette-image img-circle thumbnail img-responsive hidden-xs" src="http://governancefrombelow.net/wp-content/uploads/2014/06/chart-02.png" alt="Chart" width="466" height="542">
        </div>

        <div class="col-md-7">
          <h3>Data</h3>
          <p>These are the two databases on which all the quantitative work in Decentralization and Popular Democracy (econometrics, graphs, charts, etc) is based.</p>
        <br>
        <ul>
          <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/data/Bolivia_cs_1987_2007.dta"><span class="glyphicon glyphicon-download"></span> Data set 1 - Bolivia_cs_1987_2007 (3.7mb)</a></li>
          <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/data/Bolivia_xt_1987_2007.dta"><span class="glyphicon glyphicon-download"></span> Data set 2 - Bolivia_xt_1987_2007 (20.8mb)</a></li>
          <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/data/Key.xls"><span class="glyphicon glyphicon-download"></span> Data set key to all the variable names</a></li>
          <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/case-studies/case-studies-figures-charagua.xls"><span class="glyphicon glyphicon-download"></span> Case-studies figures</a></li>
        </ul>
        <p>Further information on these datasets at <a href="/data/">Decentralization and Popular Democracy: data</a></p>
        <br>
        <h3>Interview recordings</h3>
        <ul>
          <li>Case study: <a href="/charagua/">Charagua</a></li>
          <li>Case study: <a href="/viacha/">Viacha</a></li>
        </ul>
        <p>See all information on the <a href="/case-studies/">case studies</a> used in Decentralization and Popular Democracy.</p>
         <br>
        <h3>Teaching aids</h3>
        <ul>
          <li><a href="http://personal.lse.ac.uk/faguetj/documents/teaching-aids/fiscal-decentralization-and-accountability.ppt"><span class="glyphicon glyphicon-download"></span> Fiscal decentralization and accountability (2mbs)</a></li>
          <li><a href="http://personal.lse.ac.uk/faguetj/documents/teaching-aids/global-decentralization-experiences-and-lessons.ppt"><span class="glyphicon glyphicon-download"></span> Lessons from global experience for successful decentralization of health and education services (0.2kbs)</a></li>
        </ul>
        <p>See all related <a href="/teaching-aids/">teaching material</a></p>
        </div> 
      </div>


      <!-- START of FEATURETTE -->

      <hr class="featurette-divider">

      <div class="row">

     

        <div class="col-md-7">
        <div id="about"></div>
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
          <a href="https://maps.google.com/maps/ms?msid=202661256224975151523.000464c8d6358f8a05317&msa=0"><img class="featurette-image img-rounded img-responsive hidden-xs" src="http://governancefrombelow.net/wp-content/uploads/2013/11/map-of-bolivia.jpg" alt="Map of Bolivia" width="500px" height="500px"></a>
        </div>
      </div>
      

      <hr class="featurette-divider">

      <div class="row">
          <div class="col-md-2 textcenter"><img class="featurette-image img-responsive hidden-xs" src="http://governancefrombelow.net/wp-content/uploads/2014/06/icon_award-blue.png" alt="Map of Bolivia" width="132px" height="133px"></div>
          <div class="col-md-10 well">
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


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Online lectures and events</h4>
      </div>
      <div class="modal-body">
     <iframe width="750" height="422" src="//www.youtube.com/embed/videoseries?list=PLBHIFEylkPqMHKVK8l72IA2lmNfFqaHdX" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>