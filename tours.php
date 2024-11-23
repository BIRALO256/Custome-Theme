    <?php
    $args = array(
        'post_type' => 'tour', // Show only 'tour' post type
        'posts_per_page' => 10, // Limit to 10 posts per page
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="tour-item">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p>Location: <?php echo get_post_meta(get_the_ID(), 'tour-location', true); ?></p>
                <p>Price: <?php echo get_post_meta(get_the_ID(), 'tour-price', true); ?></p>
                <p>Duration: <?php echo get_post_meta(get_the_ID(), 'tour-duration', true); ?></p>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No tours found';
    endif;
    ?>
