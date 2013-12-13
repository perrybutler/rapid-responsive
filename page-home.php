<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="content-wrap">
	<div class="width-wrap">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" class="<?php rp_post_classes(); ?>">
				<header class="entry-header">
					<?php //the_post_admin_controls(); ?>
					<h1>Rapid<i class="rapid-logo icon-flash"></i>Platform</h1>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>