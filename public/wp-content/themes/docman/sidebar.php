<?php
while (have_posts()) {
	the_post();
?>

	<p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

<?php } ?>