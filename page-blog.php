<?php
/*
Template Name: Blog
*/
?>

<?php 

/* ===================================================
	FILE INFO:
	
	Blog for a single Category of Posts
	
	aka "AutoBlog"
	
	Use this page template to make a Blog page that 
	automatically queries Posts from a Category that 
	matches the Page's name.
*/

get_header(); ?>

<div class="content-wrap">
	<div class="width-wrap">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" class="<?php rp_post_classes(); ?>">
				<header class="entry-header">
					<?php //the_post_admin_controls(); ?>
					<h1><?php the_title(); ?></h1>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			
		<?php endwhile; endif; ?>
		
		<?php 
			wp_reset_query();
			// grab the Page Title and match it to a Post Category then setup the query
			// to pull Posts from this Post Category only
			$page_title = get_the_title();
			$post_category = get_cat_ID($page_title);
			$args = array(
				'cat' => $post_category,
				'post_status' => 'publish',
				'post_type' => 'post',
				'posts_per_page' => 5,
				'paged' => $paged,
			);
			query_posts($args);
		?>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" class="<?php rp_post_classes(); ?>">
				<header class="entry-header">
					<?php //the_post_admin_controls(); ?>
					<h2><?php the_title(); ?></h2>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
			</article>
		<?php 
			// TODO: calling RP's custom Page/Post paginate function only works when the Rapid Platform plugin is activated,
			// otherwise it throws a PHP error which is not good...how to work around this? Check if the function exists first!
			// e.g. if ( !function_exists('rp_paginate') {rp_paginate();})
			//if (!function_exists('rp_paginate')) {rp_paginate();}
		?>
		
	</div>
</div>

<?php get_footer(); ?>