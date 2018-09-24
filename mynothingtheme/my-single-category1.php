<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<p>my-single-category1.php start</p>
<?php the_content(); ?>
<p>my-single-category1.php end</p>
<?php endwhile; else : ?>
<p>my-single-category1.php start</p>
<p>There is no data to display.</p>
<p>my-single-category1.php end</p>
<?php endif; ?>
