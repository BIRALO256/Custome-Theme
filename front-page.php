<?php
// Include the header.php file. This usually contains the site's header section, such as the navigation menu and logo.
get_header();
?>

<article class="content px-3 py-5 p-md-5">
    <?php
    // Check if there are any posts to display.
    // The have_posts() function checks if there are any posts available in the WordPress database for the current query.
    if (have_posts()) {
        // Loop through all the available posts.
        // The while loop iterates through each post, setting up post data for use in the loop.
        while (have_posts()) {
            // Prepare the post data for the current post so that WordPress template tags like the_title() and the_content() work.
            the_post();

            // Here, you would typically include code to display the post's title, content, or other elements.
            // Example: echo the title and content of the post.
            the_title('<h2>', '</h2>'); // Display the post title in an H2 tag.
            the_content(); // Display the full content of the post.
        }
    } else {
        // If no posts are found, display a message to the user.
        echo '<p>No content available to display.</p>';
    }
    ?>
</article>

<?php
// Include the footer.php file. This usually contains the site's footer section, such as copyright text and footer widgets.
get_footer();
?>
