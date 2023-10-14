<?php //echo get_template_directory_uri();
// bloginfo('template_directory');
?>

<?php
get_header();
// get_header(inner);
?>


<div class="blog-container">
    <h1>Latest Blog Posts</h1>
    <div class="all-blogs">
        <?php
        while (have_posts()) {
            the_post();
            $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            ?>

            <div class="blog-post">
                <img src="<?php echo $imagepath[0] ?>" alt="<?php the_title(); ?>">
                <h2>
                    <?php the_title(); ?>
                </h2>

                <p>
                    <?php echo get_the_date(); ?>
                </p>
                <p>
                    <?php the_excerpt(); ?>
                </p>
                <p class="read-more"><a href="#">Read More <i class="fas fa-arrow-right blog-icon"></i></a></p>
            </div>
        <?php } ?>
        <?php echo wp_pagenavi(); ?>
    </div>
</div>

<?php
get_footer();
?>