<?php get_header() ?>

<div class="outter-container">
	<div class="inner-container">
		<div class="rb">
			<div class="sidebar"><?php get_sidebar(); ?></div>
			<div class="content"><?php get_template_part('content'); ?></div>
		</div>
	</div>
</div>

<?php get_footer() ?>