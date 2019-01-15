<?php
// Enqueue the scripts and styles
function civil_portal_style() {
	$parent_style = 'magazine-o-style';
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style), wp_get_theme() -> get('Version') );
}
add_action('wp_enqueue_scripts', 'civil_portal_style');


// Add civil portal scripts
function civil_portal_script() {
	wp_enqueue_script('backto-top-script',
		get_stylesheet_directory_uri() . '/assets/js/cp-gotoTop.js',
		array('jquery'), '1.0.1', true
	);
	wp_enqueue_script('preloader-script',
        get_stylesheet_directory_uri() . '/assets/js/cp-preloader.js',
        array('jquery'), '1.0.1', true
    );
	wp_enqueue_script('sticky-navbar-script',
		get_stylesheet_directory_uri() . '/assets/js/cp-stickyNavbar.js',
		array('jquery'), '1.2.1', true
	);
}
add_action('wp_enqueue_scripts', 'civil_portal_script');

// Remove Magazine 0 css and replace with Civil Portal css
function remove_magazine_o_css() {
	wp_dequeue_style('magazine-o-custom');
	wp_deregister_style('magazine-o-custom');
    wp_dequeue_style('magazine-o-responsive');
    wp_deregister_style('magazine-o-responsive');

	wp_register_style('civil-portal-custom', get_stylesheet_directory_uri() . '/assets/css/cp-custom.css', '1.0.1', true );
	wp_enqueue_style('civil-portal-custom');
    wp_register_style('civil-portal-responsive', get_stylesheet_directory_uri() . '/assets/css/cp-responsive.css', '1.0.1', true );
    wp_enqueue_style('civil-portal-responsive');
    // Preloader
    wp_register_style('civil-portal-preloader', get_stylesheet_directory_uri() . '/assets/css/cp-preloader.css', '1.0.1', true );
    wp_enqueue_style('civil-portal-preloader');
    wp_register_style('civil-portal-new-loader', get_stylesheet_directory_uri() . '/assets/css/cp-loader.css', '1.0.1', true );
    wp_enqueue_style('civil-portal-new-loader');
}
add_action('wp_enqueue_scripts', 'remove_magazine_o_css', 20);

function share_buttons() {
    $url = urlencode(get_the_permalink());
    $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
    $media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));

    include( locate_template('template-parts/share-template.php', false, false) );
}

function author_box() {
    $url = urlencode(get_the_permalink());
    $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));

    include( locate_template('template-parts/author-box.php', false, false) );
}

if( !function_exists( 'ld_modify_contact_methods' ) ) :
    function ld_modify_contact_methods( $contactmethods ) {
        $contactmethods['linkedin'] = __( 'LinkedIn' );
        $contactmethods['youtube'] = __( 'YouTube URL' );
        $contactmethods['instagram'] = __( 'Instagram' );
        $contactmethods['github'] = __( 'GitHub' );
        $contactmethods['dribbble'] = __( 'Dribbble' );
        $contactmethods['behance'] = __( 'Behance' );
        // $contactmethods['facebook'] = __( 'Facebook' );
        // $contactmethods['twitter'] = __( 'Twitter' );
        // $contactmethods['googleplus'] = __('Google Plus');

        return $contactmethods;
    }
    add_filter('user_contactmethods','ld_modify_contact_methods', 10, 1);
endif;
