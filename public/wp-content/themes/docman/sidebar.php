<?php
while (have_posts()) {
	the_post();
?>

	<p><?php the_title(); ?></p>

<?php } ?>