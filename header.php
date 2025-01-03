<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Blog Site Template</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Blog Site Template">
        <meta name="author" content="https://youtube.com/FollowAndrew">
        <link rel="shortcut icon" href="/wp-content/themes/CUSTOME-THEME/assests/images/logo.png">
        

        <?php
        wp_head();
        ?>

    </head>

    <body>
        
        <header class="header text-center">
            <a class="site-title pt-lg-4 mb-0" href="index.html">
                <!-- getting a dynmic site name also -->
                <?php echo get_bloginfo('name'); ?>
                <!-- above is the way you get the site name dyanmically from word press -->
            </a>
            
            <nav class="navbar navbar-expand-lg navbar-dark" >
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navigation" class="collapse navbar-collapse flex-column" >
                    <!-- Displaying custom logo for the site as imported by the user -->
                        <?php
                        if (function_exists('the_custom_logo')) {
                            // the_custom_logo();
                            // designing th logo to my own design not wrpress.... basicaly custmization the log unploaded by the user
                            $custom_logo_id =get_theme_mod('custom_logo');
                            $logo =wp_get_attachment_image_src($custom_logo_id);
                            // print_r($logo);
                        }
                        ?>
                    <img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo" >

                    <?php
                    // here we are using the wordpress fuction to disply our side bar manue dyanmically and this menue here is called primary
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'them_location' => 'primary', /// so whan a user selects locaation primary .. this side bar is the one selected when a user seets to primary
                            'item_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left" > %3$s </ul>'
                        )
                    )


                    ?>
                    
                    <!-- <ul class="navbar-nav flex-column text-sm-center text-md-left">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="post.html"><i class="fas fa-file-alt fa-fw mr-2"></i>Blog Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page.html"><i class="fas fa-file-image fa-fw mr-2"></i>Blog Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="archive.html"><i class="fas fa-archive fa-fw mr-2"></i>Blog Archive</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href="contact.html"><i class="fas fa-envelope fa-fw mr-2"></i>Contact Us</a>
                        </li>
                    </ul> -->
                    <hr>
                    <ul class="social-list list-inline py-3 mx-auto">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                    </ul>

                </div>
            </nav>
        </header>
        
        <div class="main-wrapper">
            <header class="page-title theme-bg-light text-center gradient py-5">
                <h1 class="heading"><?php the_title(); ?> </h1>
            </header>