<?php

// TODO: embed the rapid platform or require plugin dependency? What happens if we 
//	have rapid-responsive 0.1 + rapid-platform 0.2 or vise versa? looks like this 
//	might create compatibility issues down the road...

add_action ( 'init', 'init' );

function init() {
	// this theme uses wp_nav_menu() in one location.
	add_action("wp_enqueue_scripts", "rp_load_scripts");
	register_nav_menus( array('primary' => 'Primary Navigation'));
	if ( function_exists('register_sidebar') ) register_sidebar();
}

// TODO: load_styles() returns a 500 error due to conflicting function?
function rp_load_scripts() {
	wp_enqueue_script("jquery");
	wp_register_style("wp-styles", get_template_directory_uri() . "/wordpress.css");
	wp_enqueue_style("wp-styles");
	wp_register_script("app", get_template_directory_uri() . "/app.js", array("jquery"));
	wp_enqueue_script("app");
}

function rp_post_classes() {
	$post_classes = implode(' ', get_post_class());
	echo $post_classes;
}

function rp_title() {
	echo "<title>";
	// BEGIN SNIPPET: TwentyEleven Title Handling
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;
 
        wp_title( '|', true, 'right' );
 
        // Add the blog name.
        bloginfo( 'name' );
 
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";
 
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	// END SNIPPET: TwentyEleven Title Handling
	echo "</title>";
}

function rp_google_plus_stream() {
	$html = '';
	$html .= '<!-- Google+ Stream for the Home page only -->';
	$html .= '<div class="google-plus-stream">';
	$html .= '<div class="google-plus-stream-inner">';
	$html .= get_google_plus_stream();
	$html .= '</div>';
	$html .= '</div>';
	return $html;
}
add_shortcode( 'rp_google_plus_stream', 'rp_google_plus_stream' );

function get_google_plus_stream() {
	global $gp;  if(!$gp) return;
	$stream = $gp->activities();
	if (!empty($stream) && is_array($stream)) {
		$html = "";
		$html .= '<div class="gp">';
		$html .= '<div class="gp_logo"><img src="' . GP_URL . '/img/logo.png" width="58" height="18" alt="Google Plus Logo - stream" /> stream </div><!-- .gp_logo -->';
		$html .= '<div class="gp_stream"><ul>';
		foreach ($stream as $activity) {
			if (!empty($activity['url']))
				//$html .= '<li><a rel="nofollow" target="_blank" href="' . $activity['url'] . '">' . $gp->limit($activity['title']) . '</a></li>';
				//$html .= '<li><a rel="nofollow" target="_blank" href="' . $activity['url'] . '">' . $activity['title'] . '</a></li>';
				$title = $activity['title'];
				//$title = strip_tags($title);
				//$title = html_entity_decode($title);
				//$title = urldecode($title);
				$title = str_replace("\n", " ", $title);
				$title = str_replace("\r", " ", $title);
				//$title = preg_replace('/[^a-zA-Z0-9\s]/', '', strip_tags(html_entity_decode($title)));
				$html .= '<li><a rel="nofollow" target="_blank" href="' . $activity['url'] . '">' . $title . '</a></li>';
		}
		$html .= '</ul></div><!-- .gp_stream -->';
		$html .= '<div class="gpf"><a rel="nofollow" href="' . $gp->get('url') . '/posts" target="_blank">View All &raquo;</a></div><!-- .gpf -->';
		$html .= '</div><!-- .gp -->';
	}
	return $html;
}

?>