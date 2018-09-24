<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<p>my-single.php start</p>
<?php the_content(); ?>
<p>my-single.php end</p>
<?php endwhile; else : ?>
<p>my-single.php start</p>
<p>There is no data to display.</p>
<p>my-single.php end</p>
<?php endif; ?>
