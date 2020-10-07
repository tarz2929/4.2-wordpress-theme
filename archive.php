<?php get_header(); ?>

<h2>
    Archive Template:
    <?php echo get_the_archive_title(); ?>

</h2>

<?php while ( have_posts() ) : // Loop through the posts. ?>
  <?php the_post(); // Sets up globals / values for this iteration. ?>

<article>
<h3><?php the_title(); ?></h3>
<p>
    <strong> Article Published On:</strong>
    <time datetime="<?php echo get_the_date( DATE_ATOM); ?>">
        <? echo get_the_date(); ?>
    </time>
</p>
<p>
    <?php the_excerpt(); ?>
</p>

<p>
    <a href="<?php the_permalink(); // URL to view this post. ?>">
    Read More
    </a>
</p>

</article>


<?php endwhile; ?>

<?php get_footer();
