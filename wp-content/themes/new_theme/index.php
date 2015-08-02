<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>שקט יועצים לאקוסטיקה</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="\wordpress\wp-content\themes\new_theme\css\libs\bootstrap-sass-3.3.5\assets\stylesheets\_bootstrap.css">
	<link rel="stylesheet" href="\wordpress\wp-content\themes\new_theme\css\general.css">
	<script src="\wordpress\wp-content\themes\new_theme\js\libs\jquery-1.11.3.min.js"></script>
	<!-- <script src="\wordpress\wp-content\themes\new_theme\js\libs\angular-1.4.1\angular.js"></script>
	<script src="\wordpress\wp-content\themes\new_theme\js\app.js"></script> -->
	<script src="\wordpress\wp-content\themes\new_theme\js\general.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="content" class="site-content">
		<header>
			<nav>
				<div class="navi">
					<?php $args = array(
						'posts_per_page'   => 999999999999,
						'offset'           => 0,
						'category'         => '',
						'category_name'    => 'header',
						'orderby'          => 'date',
						'order'            => 'DESC',
						'include'          => '',
						'exclude'          => '',
						'meta_key'         => '',
						'meta_value'       => '',
						'post_type'        => 'post',
						'post_mime_type'   => '',
						'post_parent'      => '',
						'author'	   => '',
						'post_status'      => 'publish',
						'suppress_filters' => true 
						);
						?>
						<a href="/wordpress/"><div class="main-header"><img class="alignnone  wp-image-18" src="http://localhost:8080/wordpress/wp-content/uploads/2015/07/logo_sheket-300x167.png" alt="logo_sheket" width="76" height="42"> &nbsp; שקט יועצים לאקוסטיקה</div></a>
						<a href=""><div class="menu-option">סוגי רעש</div></a>
						<a href=""><div class="menu-option">פרויקטים</div></a>
						<a href=""><div class="menu-option">מי אנחנו</div></a>
						<a href=""><div class="menu-option">צור קשר</div></a>
					</div>
				</nav>
			</header>
			<div id="primary" class="content-area container">
				<main id="main" class="site-main" role="main">

					<div class="main">
						<h1>main</h1>

						<?php 
						$args['category_name'] = 'main';
						$posts_array = get_posts( $args );
						foreach ($posts_array as $key => $post) {
							$temp =  '<div class="post col-sm-12"><div class="post-title">' . $post->post_title . '</div>';
							$temp .=  '<div class="post-content col-sm-6">' . $post->post_content . '</div>';
							$temp .=  '<div class="post-date col-sm-6">' . $post->post_date . '</div></div>';
					// print_r($posts_array[$key]);
							echo $temp;
						}
						?>

					</div>
					<div class="projects">
						<h1>projects</h1>

						<?php $args['category_name'] = 'projects';
						$posts_array = get_posts( $args );
						foreach ($posts_array as $key => $post) {
							$temp =  '<div class="post col-sm-12"><div class="post-title">' . $post->post_title . '</div>';
							$temp .=  '<div class="post-content col-sm-6">' . $post->post_content . '</div>';
							$temp .=  '<div class="post-date col-sm-6">' . $post->post_date . '</div></div>';
							echo $temp;
						}
						?>

					</div>
				</main><!-- .site-main -->
			</div><!-- .content-area -->
		</div><!-- .site-content -->

	<!-- <footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		footer
	</div><!-- .site -->

	<?php wp_footer(); ?>