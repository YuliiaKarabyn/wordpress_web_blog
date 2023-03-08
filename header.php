<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blog' ); ?></a>
	<a class="menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
	<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><g transform="translate(0 24) scale(1 -1)"><g id="feAppMenu0" fill="none" fill-rule="evenodd" stroke="none" stroke-width="1"><g id="feAppMenu1" fill="#313943"><path id="feAppMenu2" d="M16 16h4v4h-4v-4Zm-6 0h4v4h-4v-4Zm-6 0h4v4H4v-4Zm12-6h4v4h-4v-4Zm-6 0h4v4h-4v-4Zm-6 0h4v4H4v-4Zm12-6h4v4h-4V4Zm-6 0h4v4h-4V4ZM4 4h4v4H4V4Z"/></g></g></g></svg>
	</a>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
  </div>
</div>
