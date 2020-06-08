<?php

get_header(); ?>


    <!-- Main content
    ================================================== -->

    <div class="container">
     <div class="row">

      <div class="col-sm-6">
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
          <?php endwhile; ?>

          <div class="row">
            <div class="col-sm-12 mt-4"><a href="https://twitter.com/GovFromBelow"><img width="26" height="22" alt="Twitter GovfromBelow" src="https://governancefrombelow.net/wp-content/uploads/2013/12/Twitter_logo_blue1.png"> @GovFromBelow</a></div>
          </div>
        </div>

        <div class="col-sm-6">
          <?php query_posts('cat=2&showposts=1'); ?>
            <h3>Online lectures &amp; events</h3>
            <hr>
            <iframe width="460" height="380" src="//www.youtube.com/embed/q1rBuPdLqKk" frameborder="0" allowfullscreen class="video-responsive"></iframe>
            <a href="#myModal" role="button" class="hidden-xs btn btn-default" data-toggle="modal">View video playlist</a>
            <a href="https://www.youtube.com/watch?v=q1rBuPdLqKk&list=PLBHIFEylkPqMHKVK8l72IA2lmNfFqaHdX" class="btn btn-default hidden-sm hidden-md hidden-lg">View YouTube playlist</a>
        
            <div class="col-sm-12">
            <?php echo do_shortcode('[print_gllr id=351]'); ?>
            <a href="/photos/" class="btn btn-default">View all photos</a>
            </div>
        </div>
      </div>
    <hr>
    
      <hr>
      <div class="row">
      <div class="col-sm-6">
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
        <div class="col-sm-6">
          <a href="https://maps.google.com/maps/ms?msid=202661256224975151523.000464c8d6358f8a05317&msa=0"><img class="featurette-image img-rounded img-responsive hidden-xs" src="https://governancefrombelow.net/wp-content/uploads/2013/11/map-of-bolivia.jpg" alt="Map of Bolivia" width="500px" height="500px"></a>
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-md-2 textcenter"><img class="featurette-image img-responsive hidden-xs" src="https://governancefrombelow.net/wp-content/uploads/2014/06/icon_award-blue.png" alt="Map of Bolivia" width="132px" height="133px"></div>
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

<?php 
get_footer();