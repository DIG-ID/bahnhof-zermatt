<?php

/**
 * This function open the main content.
 */
function theme_before_main_content() {
	?>
	<main id="main-content" class="main-content">
	<?php
}

add_action( 'before_main_content', 'theme_before_main_content' );

/**
 * This function closes the main content.
 */
function theme_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'theme_after_main_content' );

/**
 * This function open the post content.
 */
function theme_before_post_content() {
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
}

add_action( 'before_post_content', 'theme_before_post_content' );

/**
 * This function closes the post content.
 */
function theme_after_post_content() {
	?>
	</article><!-- #article -->
	<?php
}

add_action( 'after_post_content', 'theme_after_post_content' );


/**
 * This theme logo.
 */
function theme_logo() {
	?>
	<svg xmlns="http://www.w3.org/2000/svg" width="90" height="44" fill="none" viewBox="0 0 90 44" xml:space="preserve"><g fill="#8B663C" clip-path="url(#a)"><path d="M40.342 21.536c.194.535.383.626.793.62.388-.005 1.192-.16 2.2-.4.125-.033.255-.06.39-.097.177-.027.323 0 .415.193 2.46 5.12 11.63 9.63 14.895 9.63.895 0 2.152-.652 3.048-2.134.895-1.482 1.014-3.858.895-4.27-.119-.417-.28-.439-.48-.176-.151.203-.221.438-.453.78-.67 1.007-1.77 1.226-2.244 1.231-2.196.032-5.93-2.199-6.706-2.659-1.133-.711-2.476-1.739-3.517-3.092a6.443 6.443 0 0 1-.508-.766c-.021-.08.017-.123.081-.15 4.823-1.31 8.718-2.525 9.21-2.824.5-.306.301-.766-.664-.942-.626-.113-5.12-.129-8.454-.123-.01 0-.01-.006-.022-.006-.161 0-.188-.07-.172-.15.227-.486.507-.984.825-1.492 3.82-6.03 5.557-6.576 6.555-7.03a.472.472 0 0 1 .189-.038c.086.01.15.058.188.08.777.476 2.12 2.45 2.277 2.76.173.338.367.702.604.868 0 0 .313-.011.34-.156.043-.224-.113-1.01-.167-1.364-.308-1.84-2.223-7.084-2.989-8.245-.226-.337-.172-.396-.48-.23-.4.214-.944.749-1.1 1.145-.076.187-.097.62-.087.754.017.15-.054.14-.329.332-5.011 2.654-8.815 8.368-10.444 12.333-.102.187-.21.428-.405.428-1.93 0-3.96.53-4.229.605-.54.15-.874.283-.815.733.081.604 1.15 3.317 1.344 3.852h.016Z"/><path d="M89.142 28.192c-3.14-.476-8.081-2.616-12.267-5.003 2.335-3.595 2.972-5.87 3.43-7.49.044-.129.114-.145.2-.15 3.14-.07 4.71-1.15 5.05-1.295.393-.166.345-.653-.448-.942-5.114-1.872-8.454-2.386-8.89-2.472-.438-.085-1.004-.294-1.241-.08-.675.61-1.23 1.723-1.398 2.28-.07.235.114.652.67 1.08l-.011-.01c.064.058.118.101.113.197-.205.857-.755 2.558-2.163 5.469-.12.15-.254.139-.421.026-2.433-2.017-2.784-3.488-2.86-3.702-.091-.236.616-.332.14-1.124-.355-.588-2.573-.61-4.142.054 0 0-3.135 1.054-2.19 2.408.739 1.048 2.724 3.927 6.619 6.666.172.134.34.247.237.487-10.557 16.828-31.079 18.278-31.893 18.4-.853.13-1.268.723 0 .723 20.893 0 31.688-10.68 36.543-16.843 7.094 3.103 13.897 2.145 14.793 2.049.933-.102 1.586-.508.13-.728ZM39.036 38.941c.167-.556.793-2.659 1.014-3.349.097-.294-.08-.246-.167-.198-.593.332-2.012 1.343-2.223 1.311-.286-.043-.987-1.739-1.203-1.739-.215 0-.922 1.696-1.203 1.739-.21.032-1.629-.98-2.222-1.31-.081-.049-.26-.097-.167.197.22.69.846 2.793 1.014 3.35.027.085.075.117.145.09.346-.144 1.408-.61 2.433-.61s2.088.466 2.433.61c.07.027.119 0 .146-.09ZM30.097 38.974l-1.084-2.296-1.084 2.296-2.536.315 1.861 1.734-.48 2.488 2.239-1.225 2.239 1.225-.486-2.488 1.867-1.734-2.536-.315ZM21.633 38.974l-1.084-2.296-1.085 2.296-2.535.315 1.86 1.734-.48 2.488 2.24-1.225 2.238 1.225-.485-2.488 1.866-1.734-2.535-.315ZM13.168 38.974l-1.084-2.296L11 38.974l-2.536.315 1.867 1.734-.486 2.488 2.24-1.225 2.238 1.225-.486-2.488 1.867-1.734-2.536-.315ZM4.704 38.974 3.62 36.678l-1.084 2.296L0 39.289l1.867 1.734-.486 2.488 2.239-1.225 2.239 1.225-.48-2.488 1.86-1.734-2.535-.315ZM32.26 24.875h-.01c-.707 0-1.284.037-1.37.059-.546.133-.907.15-.918.599-.016.61.62 3.451.734 4.013.108.556.275.733.69.733.804 0 1.457.01 2.709-.102 7.18-.658 12.202-1.723 12.92-2.017.545-.225.42-.712-.513-1.027-.933-.316-8.939-1.734-9.775-1.878-.599-.102-.636-.129-.642-.337.108-3.751.227-8.283.216-9.642-.01-2.697 0-6.56-.01-8.754 0 0 .064-.369-.109-.545-.437-.434-3.63-1.37-4.17-1.568-.54-.198-.912-.187-1.057.198l-.054.46c.205 3.355 1.052 15.372 1.22 16.442.075.503.199 1.766.328 3.098 0 .14-.027.273-.194.273l.005-.005Z"/><path d="M1.165 18.904c.119.02.248-.011.33-.022.69-.08 2.092-.182 2.691-.123.67.064.67.465-.2.465-.868 0-1.742.332-2.012.664s.351 2.13.874 3.06c.518.932 2.455.471 2.951.402.146-.022.195.192.162.556-.075.873-.906 3.644-1.915 6.79-.21.658-.264 1.37.076 1.306.49-.097 1.688-.824 2.368-1.959.733-1.225 2.53-5.366 2.735-5.965.205-.6.183-1.038.717-1.242.534-.203 7.067-.958 8.07-1.155 1.01-.198 1.07-.08 1.48.711 2.222 4.275 3.69 6.346 8.857 9.808 1.095.733.772-.589.335-1.065s-2.39-3.644-4.5-9.187c-.22-.583-.086-.824.173-.947.194-.096 4.305-.364 5.222-.738.61-.252 1.144-.766 1.155-1.14.01-.348-1.15-.434-1.5-.466-1.926-.17-4.855-.503-5.357-.55-.734-.07-.95-.637-1.16-1.039-.518-.974-1.424-3.483-3.56-10.872-.168-.583-.292-.969-.405-1.241v-.006c-.205-.423-.485-.16-.998 1.156 0 0-.95 2.065-.955 3.339.022 2.493.707 6.196.95 7.523.178.973-.13.925-.497.947-.361.016-3.96-.065-4.429-.134-.47-.064-.674 0-.377-.947.296-.947 5.179-13.489 5.389-14.136.172-.53.345-.846-.038-1.087-.518-.331-3.29-1.284-3.83-1.482-.54-.198-.847-.187-.993.198-.264.701-4.839 15.378-5.103 16.576-.227 1.05-.335.931-1.209 1.001-.873.064-4.844.326-5.491.492-.561.145-.26.471-.011.509h.005Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h90v43.714H0z"/></clipPath></defs></svg>
	<?php
}

add_action( 'theme_logo', 'theme_logo' );


/**
 * Get our socials from the theme customizer and display them.
 */
function az_theme_socials() {
	$facebook_url  = get_field( 'socials_facebook', 'options' );
	$pinterest_url = get_field( 'socials_pinterest', 'options' );
	$instagram_url = get_field( 'socials_instagram', 'options' );
	$linkedin_url  = get_field( 'socials_linkedin', 'options' );

	$social_output = '<div class="socials-wrapper">';

	if ( $facebook_url ) :
		$social_output .= '<a href="' . esc_url( $facebook_url ) . '" target="_blank" class="social-link social-link__facebook"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>';
	endif;
	if ( $pinterest_url ) :
		$social_output .= '<a href="' . esc_url( $pinterest_url ) . '" target="_blank" class="social-link social-link__pinterest"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg></a>';
	endif;
	if ( $instagram_url ) :
		$social_output .= '<a href="' . esc_url( $instagram_url ) . '" target="_blank" class="social-link social-link__instagram"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>';
	endif;
	if ( $linkedin_url ) :
		$social_output .= '<a href="' . esc_url( $linkedin_url ) . '" target="_blank" class="social-link social-link__instagram"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg></a>';
	endif;

	$social_output .= '</div>';

	echo $social_output;
}

add_action( 'socials', 'az_theme_socials' );

/**
 * Implement and customize Yoast Breadcrumbs.
 */
function az_theme_breadcrumbs() {
	if ( function_exists( 'yoast_breadcrumb' ) ) :
		add_filter( 'wpseo_breadcrumb_separator', function( $separator ) {
			return '<span class="breadcrumbs-separator"><svg id="breadcrumbs-icon-separator" xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none"><path d="M1 9L4.67453 5.70707C5.10849 5.31818 5.10849 4.68182 4.67453 4.29293L1 1" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> </svg></span>';
		} );
		yoast_breadcrumb( '<p id="breadcrumbs"><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" id="breadcrumbs-icon-home"><g stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#000000"> <path d="M7.846 2.574a.25.25 0 01.308 0l5.25 4.12a.25.25 0 01.096.196v7.36a.75.75 0 001.5 0V6.89a1.75 1.75 0 00-.67-1.377L9.08 1.394a1.75 1.75 0 00-2.16 0l-5.25 4.12A1.75 1.75 0 001 6.89v7.36a.75.75 0 001.5 0V6.89a.25.25 0 01.096-.196l5.25-4.12z"></path> <path d="M6.5 14.25V10.5h3v3.75a.75.75 0 001.5 0v-4C11 9.56 10.44 9 9.75 9h-3.5C5.56 9 5 9.56 5 10.25v4a.75.75 0 001.5 0z"></path> </g> </g></svg>', '</p>' );
	endif;
}

add_action( 'breadcrumbs', 'az_theme_breadcrumbs' );

/**
 * Implement custom made WPML Language Switcher.
 */
/*function az_theme_custom_ls() {
	global $sitepress;
	$az_ls = $sitepress->get_ls_languages();

	if ( ! empty( $az_ls ) ) :
		echo '<ul class="az-custom-language-switcher-menu">';
		$first_lng = array_shift( $az_ls );
		echo '<li class="dropdown"><a href="' . $first_lng['url'] . '" aria-haspopup="true">' . strtoupper( $first_lng['code'] ) . '</a>';
		if ( ! empty( $az_ls ) ) :
			echo '<ul class="dropdown-content" aria-label="submenu">';
			foreach ( $az_ls as $lng ) :
				echo '<li><a href="' . $lng['url'] . '">' . strtoupper( $lng['code'] ) . '</a></li>';
			endforeach;
			echo '</ul>';
		endif;
		echo '</li></ul>';
	endif;

}

add_action( 'az_ls', 'az_theme_custom_ls' );*/