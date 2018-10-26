<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Magazine_O
 */

?>

	<footer>
	    <div class="container">
	    	<?php
	    		if( is_active_sidebar( 'footer-1' ) ) :
	    	?>
	        <div class="row">
	        	<?php
	        		dynamic_sidebar( 'footer-1' );
	        	?>
	        </div>
	        <?php
	        	endif;
	        ?>
	        <div class="row">
	            <div class="ft-btm">
	                <div class="col-xs-12 ft-hr">
	                    <hr/>
	                </div>
	                <div class="col-sm-6 col-xs-12">
	                    <div class="copyright">
							<!-- <span class="sep"> | </span> -->
							<?php
								/* translators: 1: Theme name, 2: Theme author. */
								printf(
									__( '%1$s %2$s %3$s. All Rights Reserved' ),
									esc_html__( '&copy;' ),
									date ( 'Y' ),
									sprintf( '<a href="%1s" title="%2s">%3s</a>' ,esc_url( home_url( '/' ) ) ,esc_attr__( get_bloginfo( 'description' ) ) ,esc_html__( get_bloginfo( 'name' ) ) )
								);
							?>
	                    </div>
	                </div>
	                <div class="col-sm-6 col-xs-12">
	                    <div class="ft-menu">
	                    	<?php
	                    		if( has_nav_menu( 'footer_menu' ) ) :
	                    			wp_nav_menu( array(
	                    				'theme_location' => 'footer_menu',
	                    			) );
	                    		endif;
	                    	?>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</footer>
	<a href="#" class="topbutton" title="Back to Top"><i class="fa fa-angle-up"></i></a>

<?php wp_footer(); ?>

</body>
</html>
