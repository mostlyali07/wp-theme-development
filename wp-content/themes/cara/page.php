<?php
get_header();
//the_post();
?>

<header>
    <h1><?php the_title();  ?></h1>
    <p>Your Trusted Partner for Lorem Ipsum</p>
    <a href="<?php echo site_url(); ?>">Home</a> / <a href="/"><?php the_title();  ?></a>
</header>

<div class="container">
    
    <?php the_post_thumbnail(array(500, 500)); ?>

    <?php the_content(); ?>

    <?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

    ?>

    <img src="<?php echo $imagepath[0] ?>" alt="" width="500">

</div>


<?php
get_footer();
?>