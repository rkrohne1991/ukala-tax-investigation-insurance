<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<header class="header bg-primary">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-lg-4">
						<div class="header__title">
							<a class="header__logo" href="<?php echo(get_home_url()); ?>">
								<img src="<?php echo(get_template_directory_uri()); ?>/img/UKALA-logo.png" alt="UKALA logo">
							</a>
							<div class="header__text">
								<p>UK ASSOCIATION</p>
								<p><span>OF</span> LETTING AGENTS</p>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-lg-8">
						<div class="header__buttons-container">
							<a class="btn btn-link" href="">Find a UKALA agent</a>
							<a class="btn btn-link" href="">Join UKALA</a>
							<a  class="btn btn-secondary" href="">Log in</a>
						</div>
					</div>
				</div>
			
			</div>
		</header>

		<div class="navbar">
			<div class="container">
				<div class="navbar-desktop">
					<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => '',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'depth'           => 1,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
					); ?>
				</div>
				<div class="navbar-mobile">
					<nav class="navbar navbar-light bg-white">
						<button data-action="toggle-menu" class="navbar-toggler" type="button">
							<span class="navbar-toggler-icon"></span>
						</button>
					</nav>
				</div>
			</div>
		</div>

		<div class="toggle-menu">
			<div class="container-fluid">
				<div class="toggle-close">
					<button data-action="toggle-menu" class="navbar-toggler" type="button">
						X
					</button>
				</div>
				<div class="toggle-content">
					<a class="header__logo" href="<?php echo(get_home_url()); ?>">
						<img src="<?php echo(get_template_directory_uri()); ?>/img/UKALA-logo.png" alt="UKALA logo">
					</a>
					<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'toggle-nav',
								'container_id'    => '',
								'menu_class'      => '',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'depth'           => 1,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
					); ?>
				</div>

			</div>
		</div>

	</div><!-- #wrapper-navbar end -->
