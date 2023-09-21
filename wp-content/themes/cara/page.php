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
    <!-- <h2>Our Story</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec sapien ac est vehicula fringilla a id ligula. Sed sit amet vestibulum urna. Vivamus dignissim, odio a ultrices cursus, libero leo egestas ipsum, at facilisis odio neque vel dolor.</p>

    <h2>Our Team</h2>
    <p>We have a dedicated team of professionals who are passionate about what they do. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec sapien ac est vehicula fringilla a id ligula.</p>

    <h2>Our Mission</h2>
    <p>Our mission is to provide the best Lorem Ipsum solutions to our clients. We strive for excellence in everything we do. Sed nec sapien ac est vehicula fringilla a id ligula.</p> -->
    <?php the_post_thumbnail(array(500, 500)); ?>

    <?php the_content(); ?>

    <?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
    // print_r($imagepath);
    ?>

    <img src="<?php echo $imagepath[0] ?>" alt="" width="500">

</div>


<?php
get_footer();
?>