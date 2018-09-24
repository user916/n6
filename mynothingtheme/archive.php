<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<p>archive.php start</p>
<?php the_content(); ?>
<p>archive.php end</p>
<?php endwhile; else : ?>
<p>archive.php start</p>
<p>There is no data to display.</p>
<p>archive.php end</p>
<?php endif; ?>
<?php get_footer();
