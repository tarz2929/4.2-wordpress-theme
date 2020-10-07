<footer>
    <h2><?php bloginfo('title'); ?> </h2>
    <p>
    &copy;
    <?php echo date('Y'); ?>
    <a href="<?php echo site_url(); ?>">
        <?php bloginfo( 'title' ); ?>
    </a>
    All Rights Reserved
    </p>
</footer>
<?php
//similar to wp_head()
    wp_footer();
?>

</body>
</html>
