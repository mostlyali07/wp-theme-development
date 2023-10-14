<?php
get_header();
the_post();
?>

<div class="post-container">
    <h1 class="post-title">
        <?php the_title(); ?>
    </h1>
    <p class="post-meta"><i class="fas fa-calendar post-icon"></i> Published on
        <?php echo get_the_date(); ?> by
        <?php the_author(); ?>
    </p>
    <p class="post-meta"><i class="fas fa-tags post-icon"></i> Category:
        <?php
        $categories = get_the_category(); // Get an array of categories assigned to the post
        
        if ($categories) {
            // Assuming you want to display the first category assigned to the post
            $category = $categories[0]; // Get the first category object
        
            // Display the category name
            echo esc_html($category->name);
        }
        ?>
    </p>
    <?php
    $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
    ?>
    <div class="post-content">
        <img src="<?php echo $imagepath[0] ?>" alt="<?php the_title(); ?>">
        <?php the_content(); ?>
    </div>
</div>


<?php
get_footer();
?>