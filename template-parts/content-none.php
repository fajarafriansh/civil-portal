<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magazine_O
 */

?>
<article class="post-grid post-wrap post single single-post">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="single-title-con">
        <div class="error-404 text-center">

			<span align="center"><?php
				$image = get_stylesheet_directory_uri() . '/assets/img/no-result.png'; ?>
				<img src="<?php echo esc_url($image); ?>"  class='img-responsive'/>
			</span>

            <h1 class="s"><?php esc_html_e( 'Aw! Post Tidak Tersedia', 'magazine-o' ); ?></h1>
            <br>
            <p class="error-404-subtitle"><?php esc_html_e( 'Post yang kamu inginkan belum tersedia di situs kami, kami akan coba menulisnya.', 'magazine-o' ); ?></p>
            <br><br>
            <span align="center"><a class="btn btn-default" target="_self" href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Semua Post', 'magazine-o' ); ?></a></span>

        </div>

    </div>
</div>
</article>
