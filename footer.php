<footer class="footer text-center py-2 theme-bg-dark">
    <!-- Display the footer menu here -->
    <?php
    wp_nav_menu(array(
        'theme_location' => 'footer', // 'footer' is the location you registered in functions.php
        'container' => 'nav', // The menu will be wrapped in a <nav> tag
        'container_class' => 'footer-menu', // Optional: Add a class for styling
        'menu_class' => 'menu-items', // Optional: Add a class for the <ul> element
        'depth' => 1, // Optional: Limit the depth of the menu (1 means no submenus)
    ));
    ?>

    <!-- Copyright Section -->
    <p class="copyright"><a href="https://youtube.com/FollowAndrew">Follow Jovic</a></p>
</footer>

<?php
    wp_footer(); // Ensure the footer hooks for any necessary WordPress scripts
?>
</body>
</html>
