<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-commerce Website</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/b1e4efcbad.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="header">
        <?php $logoimg = get_header_image(); ?>
        <a href="<?php echo site_url(); ?>"><img src="<?php echo $logoimg; ?>" alt="logo" /></a>

        <div>
            <?php wp_nav_menu(array(
                '
            theme_location' => 'primary-menu', 'menu_id' => 'navbar'
            )) ?>

        </div>
    </div>

    <?php wp_head(); ?>