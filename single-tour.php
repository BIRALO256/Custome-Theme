    <?php
    // Inside single-tour.php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <h1><?php the_title(); ?></h1>
            <div class="tour-details">
                <p>Location: <?php echo get_post_meta(get_the_ID(), 'tour-location', true); ?></p>
                <p>Price: <?php echo get_post_meta(get_the_ID(), 'tour-price', true); ?></p>
                <p>Duration: <?php echo get_post_meta(get_the_ID(), 'tour-duration', true); ?></p>
                <div class="tour-description">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
        endwhile;
    else :
        echo 'Tour not found';
    endif;
    ?>
