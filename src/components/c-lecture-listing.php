<?php
/*
* List out all lectures and talks from cpt lectures
*/
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="col-lg-8 mb-3" role="main">
<?php
// get the cpt lecture posts
$query = new WP_Query([
    'post_type' => 'lectures',
    'posts_per_page' => '-1',
    'meta_key' => 'lecture_date',
    'orderby' => 'meta_value_num',
    'order' => 'DEC',
    ]);

if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();

        $lecture_date = get_field('lecture_date');
        $lecture_location = get_field('lecture_location');
        $lecture_institution = get_field('lecture_institution');
        $lecture_body_text = get_field('lecture_body_text');
        ?>

        <div class="row mt-2 pt-3 border-top">
            <div class="col-lg-2">
                <?php
                // Display date column
                _e('<span>' . $lecture_date . '</span><br>');
                ?>
            </div>
            
            <div class="col-lg">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <?php
                    // Display the location if exsits
                    if ($lecture_location) {
                        foreach ($lecture_location as $location) {
                            _e('<span style="display:block">' . $location->name . '</span>');
                        }
                    }
                    ?>
                </h6>

                <h6 class="card-subtitle mb-2 text-muted">
                    <?php
                    // Display the institution name if exsits
                    if ($lecture_institution) {
                        foreach ($lecture_institution as $institution) {
                            _e('<span style="display:block">' . $institution->name . '</span>');
                        }
                    }
                    ?>
                </h6>

                <?php
                // Display body content if exsits
                _e('<p>' . $lecture_body_text . '</p>'); ?>
 
                <?php
                if (have_rows('lecture_document')) :
                    while (have_rows('lecture_document')) :
                        the_row();
                        $lecture_file_title = get_sub_field('lecture_file_title');
                        $lecture_file_url = get_sub_field('lecture_file_url');
        
                        _e('<a href="' . $lecture_file_url . '" class="card-link">' . $lecture_file_title . '</a><br>');
                    endwhile;
                else :
                        // no rows found
                endif;

                if (have_rows('lecture_link')) :
                    while (have_rows('lecture_link')) :
                        the_row();
                        $lecture_link_title = get_sub_field('lecture_link_title');
                        $lecture_link_url = get_sub_field('lecture_link_url');
        
                        _e('<a href="' . $lecture_link_url . '" class="card-link">' . $lecture_link_title . '</a><br>');
                    endwhile;
                else :
                        // no rows found
                endif;
                ?>
            </div>
        </div>
        
        <?php
    endwhile;
else :
    _e('<p>' . esc_html_e('Sorry, no posts available.') . '</p>');
endif;

wp_reset_postdata();
?>
</div>