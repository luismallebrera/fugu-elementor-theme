<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site-container">
	<a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e( 'Skip to content', 'fugu-elementor' ); ?></a>

	<header id="site-header" class="site-header" role="banner">
		<?php
		if ( function_exists( 'elementor_theme_do_location' ) ) {
			if ( elementor_theme_do_location( 'header' ) ) {
				// Elementor header rendered inside the wrapper.
			} else {
				?>
				<div class="header-inner">
					<div class="site-branding">
						<?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
						<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></div>
					</div>

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'primary-menu' ) ); ?>
					</nav>
				</div>
				<?php
			}
		} else {
			?>
			<div class="header-inner">
				<div class="site-branding">
					<?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></div>
				</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'primary-menu' ) ); ?>
				</nav>
			</div>
			<?php
		}
		?>
	</header>

	<div id="content" class="site-content">
		<?php do_action( 'fugu_elementor_before_main' ); ?>

		<main id="main" class="site-main" role="main">
			<?php do_action( 'fugu_elementor_inside_main' ); ?>
