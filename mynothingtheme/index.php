<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<p>index.php start</p>
<?php the_content(); ?>
<p>index.php end</p>
<?php endwhile; else : ?>
<p>index.php start</p>
<p>There is no data to display.</p>
<p>index.php end</p>
<?php endif; ?>
<?php get_footer();
