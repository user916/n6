<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<p>page.php start</p>
<?php the_content(); ?>
<p>page.php end</p>
<?php endwhile; else : ?>
<p>page.php start</p>
<p>There is no data to display.</p>
<p>page.php end</p>
<?php endif; ?>
<?php get_footer();
