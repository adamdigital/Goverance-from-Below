<?php

while (have_posts()) :
    the_post();
    the_content();

    $doc_type = get_field('listing_document_type');
    $doc_type = strtolower($doc_type);

    $doc_categories = get_terms(array(
    'taxonomy' => $doc_type
    ));

    if (!empty($doc_type)) { ?>
        <?php

        if (taxonomy_exists($doc_type)) {
            $doc_categories = get_terms(array(
            'taxonomy' => $doc_type
            ));

            if (is_array($doc_categories) && !empty($doc_categories)) { ?>
              <div class="col-sm-6">
              <div class="doc-listing-cat-filter-wrapper">
              <label for="doc-cat-filter">Filter articles by:</label>
              <select id="doc-cat-filter" class="form-control">
              <option value="">All categories</option>
                    <?php foreach ($doc_categories as $category) { ?>
                      <option value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></option>
                        <?php
                    }
                    ?>
                    </select>
                    </div>
                    </div>
                    <div class="col-sm-8">
                    <?php


                    foreach ($doc_categories as $category) { ?>
                        <?php

                        $documents = get_posts(
                            array(
                            'post_type' => 'documents',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                            array(
                            'taxonomy' => $doc_type,
                            'field' => 'slug',
                            'terms' => $category->slug,
                            ),
                            ),
                            'orderby' => 'meta_value_num',
                            'meta_key' => 'publish_date',
                            'order' => 'DESC',
                            )
                        );

                        if (is_array($documents) && !empty($documents)) { ?>
                        <div id="doc-cat-<?php echo $category->term_id; ?>"
                              class="document-list-by-category">
                            <h3><?php echo $category->name; ?></h3>

                            <?php

                            foreach ($documents as $doc) {
                                include(locate_template('src/components/c-document-list-item.php', false, false));
                            }
                            ?>
                              </div>
                            <?php
                        }
                    }
                    ?>
                      </div>
                    <?php
            } else {
                $documents = get_posts(
                    array(
                    'post_type' => 'documents',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                    array(
                    'key' => 'document_type_to_upload',
                    'value' => $doc_type,
                    ),
                    ),
                    'orderby' => 'meta_value_num',
                    'meta_key' => 'publish_date',
                    'order' => 'DESC',
                    )
                );

                if (is_array($documents) && !empty($documents)) { ?>
<div class="col-sm-6">

                        <?php
                        foreach ($documents as $doc) {
                            include(locate_template('src/components/c-document-list-item.php', false, false));
                        }
                        ?>
</div>
                    <?php
                } else { ?>
<p>No Documents Found</p>
                    <?php
                }
            }
        }
    }
    ?>
<?php endwhile; // end of the loop.