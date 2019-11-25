<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till div#breadcrumb
 *
 * @package MIT_Libraries_Parent
 * @since 1.2.1
 */

?><!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js lte-ie9" lang="en"><![endif]-->
<!--[if !(IE 8) | !(IE 9) ]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- <meta name="format-detection" content="telephone=no"> -->
<!--<meta name="viewport" content="width=device-width" />-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="The libraries of the Massachusetts Institute of Technology - Search, Visit, Research, Explore" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta property="og:title" content="MIT Libraries"/>
<meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() . '/images/mit-libraries-logo-black-yellow-1200-1200.png', 'https' ); ?>"/>
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="1200" />
<meta property="og:image:alt" content="MIT Libraries logo" />
<meta property="og:url" content="//libraries.mit.edu">
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<?php
		// $askUrl = get_post_meta($post->ID, "ask_us_override", 1);
		$askUrl = '';
		if ( '' === $askUrl ) {
			$askUrl = '/ask';
		}
?>
	<script>
		todayDate="";
	</script>
</head>

<body <?php body_class(); ?>>
	<div id="skip"><a href="#content">Skip to Main Content</a></div>
	<div class="wrap-page">
		<header class="header-main flex-container flex-end">
			<h1 class="name-site group nav-logo">
				<a href="/" class="logo-mit-lib">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="5 -3 210 95"><title>MIT Libraries logo</title><path d="M8.12,9H20l4.35,15.65c.17.57.36,1.31.58,2.22s.44,1.81.67,2.68.53,2.12.8,3.25h.1c.23-1.13.48-2.22.75-3.25.2-.87.42-1.76.65-2.67s.43-1.65.6-2.22L32.92,9h12V44.75h-8.1V22.66c0-.93,0-1.95.1-3.05h-.1c-.27,1-.5,2-.7,2.85s-.38,1.61-.53,2.22l-.42,1.58-5.1,18.49h-7.3L17.67,26.3c-.1-.33-.25-.87-.45-1.6s-.38-1.48-.55-2.25-.42-1.82-.67-2.85h-.1v3c0,.8,0,1.6.08,2.4a8.53,8.53,0,0,1,0,1.75v18H8V9Zm40,0H57V44.75H48.12Zm22.1,7.45H59.82V9H89.57v7.45H79.07v28.3H70.22ZM8.12,50H17V78.25H33.64v7.5H8.12Zm28.7,0H45v6.6H36.82Zm0,10.15H45v25.6H36.82Zm27,26.4a9.82,9.82,0,0,1-4.55-1,7.9,7.9,0,0,1-3.2-3H56v3.2H48.2V50h8.15V63h.15a9.45,9.45,0,0,1,2.9-2.55,8.62,8.62,0,0,1,4.37-1,9.86,9.86,0,0,1,4.53,1,10,10,0,0,1,3.45,2.85A13.51,13.51,0,0,1,74,67.6a17.89,17.89,0,0,1,.7,5.4,19.45,19.45,0,0,1-.78,5.72A12.53,12.53,0,0,1,71.72,83a9.48,9.48,0,0,1-3.45,2.67A10.63,10.63,0,0,1,63.82,86.55Zm-2.3-6.45a4.14,4.14,0,0,0,3.67-1.92,9.45,9.45,0,0,0,1.28-5.27,9.74,9.74,0,0,0-1.28-5.3,4.2,4.2,0,0,0-3.77-2,4.43,4.43,0,0,0-4,2.1A9.7,9.7,0,0,0,56.12,73a8.49,8.49,0,0,0,1.45,5.17,4.69,4.69,0,0,0,4,2Zm15.11-20h7.8v4h.15a9.56,9.56,0,0,1,3-3.35,7.29,7.29,0,0,1,4-1,4.57,4.57,0,0,1,1.6.2v7H93a7.34,7.34,0,0,0-6,1.27q-2.16,1.78-2.16,6v11.5H76.63Zm26,26.3a12.1,12.1,0,0,1-3.53-.5,7.55,7.55,0,0,1-2.77-1.5A7,7,0,0,1,94.48,82a8.09,8.09,0,0,1-.66-3.4,7.29,7.29,0,0,1,.78-3.52,6.74,6.74,0,0,1,2.12-2.35,10.79,10.79,0,0,1,3.1-1.43,27,27,0,0,1,3.77-.75,24.35,24.35,0,0,0,5-1A1.93,1.93,0,0,0,110,67.7a2.56,2.56,0,0,0-.83-2,3.91,3.91,0,0,0-2.67-.7,4.41,4.41,0,0,0-3,.85,3.66,3.66,0,0,0-1.2,2.45H94.8a8.52,8.52,0,0,1,.8-3.4,8.14,8.14,0,0,1,2.17-2.8,10.65,10.65,0,0,1,3.58-1.9,16.29,16.29,0,0,1,5-.7,19.72,19.72,0,0,1,4.9.52,9.7,9.7,0,0,1,3.4,1.58,7.31,7.31,0,0,1,2.45,3,10.5,10.5,0,0,1,.8,4.25v12.9a13.08,13.08,0,0,0,.17,2.42,1.8,1.8,0,0,0,.73,1.23v.35h-7.9a3.53,3.53,0,0,1-.5-1.12,14.56,14.56,0,0,1-.35-1.72h0a8.4,8.4,0,0,1-2.73,2.54,10,10,0,0,1-4.68,1Zm2.6-5.2a5.46,5.46,0,0,0,3.68-1.2,4.27,4.27,0,0,0,1.42-3.35v-3a11.5,11.5,0,0,1-1.87.73c-.72.22-1.5.43-2.34.62a10.36,10.36,0,0,0-3.4,1.27,2.48,2.48,0,0,0-1,2.17,2.43,2.43,0,0,0,1,2.2,4.53,4.53,0,0,0,2.5.55h0Zm15.87-21h7.77v4H129a9.56,9.56,0,0,1,3-3.35,7.29,7.29,0,0,1,4-1,4.57,4.57,0,0,1,1.6.2v7h-.2a7.34,7.34,0,0,0-6,1.27c-1.49,1.22-2.24,3.22-2.23,6V85.75H121V60.15ZM140,50.1h8.13v6.6H140Zm0,10.15h8.13v25.5H140ZM164,86.6a15,15,0,0,1-5.7-1,12.07,12.07,0,0,1-4.3-2.85,12.84,12.84,0,0,1-2.7-4.33,15.07,15.07,0,0,1-1-5.4,14.74,14.74,0,0,1,1-5.33,12.72,12.72,0,0,1,2.7-4.3,12.58,12.58,0,0,1,4.13-2.94,14.62,14.62,0,0,1,10.28-.17,12.29,12.29,0,0,1,3.83,2.35A12.7,12.7,0,0,1,175.65,68a20.83,20.83,0,0,1,1.08,7.13H158.32a7.53,7.53,0,0,0,1.8,4.1,5.14,5.14,0,0,0,4,1.5,4.84,4.84,0,0,0,2.65-.68,4.28,4.28,0,0,0,1.6-1.87h8a9.47,9.47,0,0,1-1.5,3.33,10.85,10.85,0,0,1-2.8,2.73A12.06,12.06,0,0,1,168.49,86a15.31,15.31,0,0,1-4.52.5Zm4.5-16.3a6,6,0,0,0-1.5-3.65,4.37,4.37,0,0,0-3.3-1.35,4.64,4.64,0,0,0-3.6,1.35,7,7,0,0,0-1.65,3.65Zm21.9,16.35q-5.66,0-9-2.42a8.34,8.34,0,0,1-3.52-6.78h7.7A4.15,4.15,0,0,0,187,80.3a5.06,5.06,0,0,0,3.25,1,5.61,5.61,0,0,0,2.92-.65,2.08,2.08,0,0,0,1.08-1.9,1.82,1.82,0,0,0-.55-1.37,4.08,4.08,0,0,0-1.45-.85,11.46,11.46,0,0,0-2.08-.5c-.78-.11-1.59-.25-2.42-.42q-1.65-.3-3.3-.72a10,10,0,0,1-3-1.28,6.41,6.41,0,0,1-2.12-2.27,7.47,7.47,0,0,1-.8-3.68,7.21,7.21,0,0,1,.87-3.55,7.61,7.61,0,0,1,2.35-2.66,11.15,11.15,0,0,1,3.53-1.55,17.18,17.18,0,0,1,4.28-.52c3.63,0,6.42.73,8.35,2.2a8,8,0,0,1,3.2,6h-7.5a3,3,0,0,0-1.33-2.37,5.48,5.48,0,0,0-2.78-.62,5,5,0,0,0-2.52.58A1.9,1.9,0,0,0,186,67a1.34,1.34,0,0,0,.5,1.1,4.27,4.27,0,0,0,1.35.67,13.55,13.55,0,0,0,2,.48l2.33.4c1.13.2,2.27.44,3.42.73a10.5,10.5,0,0,1,3.17,1.32,7,7,0,0,1,2.3,2.42,7.84,7.84,0,0,1,.9,4,7.35,7.35,0,0,1-3.32,6.38,11.84,11.84,0,0,1-3.7,1.6,18.75,18.75,0,0,1-4.66.5Z" style="fill:#fff;" /></svg>
					<span class="sr">MIT Libraries</span>
				</a><!-- End MIT Libraries Logo -->
			</h1><!-- End H1.name-site -->

			<?php if ( is_page( 'smartmenus' ) ) {
				get_template_part( 'inc/nav', 'smartmenus' );
			} else {
				get_template_part( 'inc/nav', 'main' );
			} ?>
			
			<a class="link-logo-mit" href="http://www.mit.edu" alt="Massaschusetts Institute of Technology logo"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="54" height="28" viewBox="0 0 54 28" enable-background="new 0 0 54 28" xml:space="preserve" class="logo-mit"><rect x="28.9" y="8.9" width="5.8" height="19.1" class="color"/><rect width="5.8" height="28"/><rect x="9.6" width="5.8" height="18.8"/><rect x="19.3" width="5.8" height="28"/><rect x="38.5" y="8.9" width="5.8" height="19.1"/><rect x="38.8" width="15.2" height="5.6"/><rect x="28.9" width="5.8" height="5.6"/></svg>
				<span class="sr">MIT Logo</span>
			</a><!-- End MIT Logo -->

			<a href="/search" class="link-site-search hidden-non-mobile">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search"><path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path></svg>
				<span class="bottom">Search</span>
			</a><!-- End /search -->
			
			<a href="/barton-account" class="link-account hidden-non-mobile">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="15.4" height="16" viewBox="0 0 15.4 16" enable-background="new 0 0 15.445 16" xml:space="preserve" class="icon-account"><path d="M13.4 15.7C12.2 15.9 10.4 16 7.7 16c-5.4 0-7.3-0.6-7.3-0.6 -0.3-0.1-0.4-0.4-0.4-0.7 0.3-1.6 1.2-2.5 2.5-3.3 0.3-0.2 0.8-0.4 1.2-0.6 0.8-0.3 1.8-0.7 2-1.3C5.8 9.2 5.7 8.6 5.2 7.9c-1.4-2.3-1.7-4.3-0.8-5.9C5.1 0.7 6.4 0 7.7 0c1.4 0 2.6 0.7 3.3 2 0.9 1.6 0.7 3.6-0.8 5.9C9.8 8.6 9.6 9.2 9.8 9.6c0.2 0.6 1.2 1 2 1.3 0.4 0.2 0.9 0.4 1.2 0.6 1.2 0.8 2.1 1.6 2.5 3.3 0.1 0.3-0.1 0.6-0.4 0.7C15 15.4 14.5 15.6 13.4 15.7"/></svg>
				<span class="bottom">Account</span>
			</a><!-- End /barton-account -->

			<a href="/contact" class="link-contact hidden-non-mobile">
				<i class="icon-book" aria-hidden="true"></i>
				<span class="bottom">Contact</span>
			</a><!-- End /contact -->

		</header>

		<?php

			$pageRoot = getRoot( $post );
			$section = get_post( $pageRoot );

		?>
