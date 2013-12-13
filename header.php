<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<?php wp_head(); ?>

	<?php rp_title(); ?>
	
	<!-- TODO: Some javascript to control the mobile menu drop-down, load this externally or from Rapid Platform... -->
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery(".mobile-menu-button").click(function() {
				jQuery(this).children("i").removeClass();
				
				if (jQuery(".mobile-menu-wrap").css("display") == "block") {
					//jQuery(".mobile-menu").css("display", "none");
					jQuery(".mobile-menu-wrap").slideUp();
					jQuery(".mobile-menu-button-label").text("Menu ");
					jQuery(this).children("i").addClass("icon-down-open");
				}
				else {
					//jQuery(".mobile-menu").css("display", "block");
					jQuery(".mobile-menu-wrap").slideDown();
					jQuery(".mobile-menu-button-label").text("Close ");
					jQuery(this).children("i").addClass("icon-up-open");
				}
			});
		});
	</script>
</head>

<body <?php body_class("site-design-light"); ?>>
	<div id="main-bg0"></div>
	<div id="main-bg1"></div>
    <div id="main">
		<div class="top-shadow"></div>
		<header id="header">
			<div class="header-wrap">
				<nav id="nav">
					<div id="nav-menu-mobile">
						<div class="mobile-menu-wrap">
							<?php echo do_shortcode("[rp_paged_menu design='dark']"); ?>
						</div>
						<div class="mobile-menu-button-wrap">
							<i class="button-bgcolor icon-flash"></i>
							<a class="mobile-menu-button" href="#"><span class="mobile-menu-button-label">Menu </span><i class="icon-down-open"></i></a>
						</div>
					</div>
					<div id="nav-menu-primary">
						<div class="width-wrap">
							<div class="nav-menu-wrap">
								<div class="nav-menu-design-dark">
									<?php wp_nav_menu( array( 'menu' => 'Primary Navigation', 'theme_location' => 'primary', 'sort_column' => 'menu_order', 'menu_class' => 'xxx', 'container' => 'false',) ); ?>
								</div>
							</div>
							<i class="button-bgcolor icon-flash"></i>
						</div>
					</div>
				</nav>
				<?php //rp_site_title(); ?>
				<?php if ( is_home() || is_front_page() ) : ?>
					<?php /* <h1 id="site-title" class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> */ ?>
				<?php else : ?>
					<span id="site-title" class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<?php endif; ?>
			</div>
		</header><!-- #header -->