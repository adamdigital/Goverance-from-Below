<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!empty($doc)) {
    $document_upload = get_field('document_upload', $doc->ID);
    $publish_date = get_field('publish_date', $doc->ID);
    $document_excerpt = get_field('document_excerpt', $doc->ID);
    $file_ext = pathinfo($document_upload['url'], PATHINFO_EXTENSION);
    $document_title = ucwords(strtolower($doc->post_title));

    if (!empty($document_upload)) { ?>
        <div class="documents-list-item">
            <a href="<?php echo $document_upload['url']; ?>"><?php echo $document_title; ?> [<?php echo strtoupper($file_ext); ?>]</a>
            <?php echo $document_excerpt; ?>
        </div>
        <?php
    }
}
