<?php get_header(); ?>
<p>single.php start</p>
<?php 
//If the category name of Posts is "category1".
if (in_category('category1')) : 
	get_template_part( 'my-single-category1' );

//If the category name of Posts is "category2".
elseif (in_category('category2')) : 
	get_template_part( 'my-single-category2' );

//IF The category name of a does not exist.
else : 
	get_template_part( 'my-single' );
endif;
?>
<p>single.php end</p>
<?php get_footer();
