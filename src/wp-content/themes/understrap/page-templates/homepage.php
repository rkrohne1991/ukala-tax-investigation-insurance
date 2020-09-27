<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$banner = get_field("homepage_banner");
$banner_title = get_field("banner_title");
?>

<div class="banner">
	<div class="banner-overlay"></div>
	<div class="banner-image" style="background-image: url(<?php echo($banner["url"]); ?>)"></div>
	<div class="banner-title"><h2><?php echo($banner_title); ?></h2></div>
</div>

<?php while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

get_footer();