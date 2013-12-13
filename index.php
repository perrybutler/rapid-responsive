<?php

/* ===================================================
	FILE INFO:
	
	This is the default template for any WordPress 
	Post/Page/Archive that doesn't have it's own 
	template file in the theme directory.
*/

get_header();

?>

<div class="content-wrap">
	<div class="width-wrap">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" class="<?php rp_post_classes(); ?>">
				<header class="entry-header">
					<?php //rp_frontend_admin_controls(); UNDONE: this should be reintroduced via the Rapid Edit core component in a future release... ?>
					<h1><?php the_title(); ?></h1>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		<?php 
			// TODO: calling RP's custom Page/Post paginate function only works when the Rapid Platform plugin is activated,
			// otherwise it throws a PHP error which is not good...how to work around this? Check if the function exists first!
			// e.g. if ( !function_exists('rp_paginate') {rp_paginate();})
			//if (!function_exists('rp_paginate')) {rp_paginate();}
		?>
		<?php comments_template(); ?>
	</div>
</div>

<?php get_footer(); ?>