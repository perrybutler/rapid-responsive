<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<div class="content-wrap">
	<div class="width-wrap">
		<h1>Search</h1>
		<?php get_search_form(); ?>
		<?php 
			// TODO: calling RP's custom Page/Post paginate function only works when the Rapid Platform plugin is activated,
			// otherwise it throws a PHP error which is not good...how to work around this? Check if the function exists first!
			// e.g. if ( !function_exists('rp_paginate') {rp_paginate();})
			if (!function_exists('rp_paginate')) {rp_paginate();}
		?>
		<?php comments_template(); ?>
	</div>
</div>

<?php get_footer(); ?>