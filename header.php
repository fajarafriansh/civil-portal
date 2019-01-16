<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Magazine_O
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Preloader -->
	<div class="loader-wrapper">
		<div class="loader">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
				<style>
					.st0{fill:none;stroke:#c32035;stroke-width:2;stroke-miterlimit:10;}
					.st1{clip-path:url(#SVGID_2_);}
					.st2{fill:#e76576;stroke:#c32035;stroke-width:2;stroke-miterlimit:10;}
					.st3{fill:#FFFFFF;}
					.st4{fill:#c32035;}
				</style>
				<path class="st0" d="M48.8,83.4L20.2,66.9c-0.4-0.2-0.7-0.7-0.7-1.2v-33c0-0.5,0.3-0.9,0.7-1.2l28.6-16.5c0.4-0.2,1-0.2,1.4,0
					l28.6,16.5c0.4,0.2,0.7,0.7,0.7,1.2v33c0,0.5-0.3,0.9-0.7,1.2L50.2,83.4C49.8,83.7,49.2,83.7,48.8,83.4z"/>
					<g>
					<defs>
						<path id="SVGID_1_" d="M48.8,83.4L20.2,66.9c-0.4-0.2-0.7-0.7-0.7-1.2v-33c0-0.5,0.3-0.9,0.7-1.2l28.6-16.5c0.4-0.2,1-0.2,1.4,0
							l28.6,16.5c0.4,0.2,0.7,0.7,0.7,1.2v33c0,0.5-0.3,0.9-0.7,1.2L50.2,83.4C49.8,83.7,49.2,83.7,48.8,83.4z"/>
					</defs>
					<clipPath id="SVGID_2_">
						<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
					</clipPath>
					<g class="st1">
						<path class="gear1 st2"  d="M42.2,38.5c-0.8-4-0.6-3-1.3-7L35,31.6c-0.9-1.3-1.1-1.7-2-3.1l2.4-5.3c-3.4-2.3-2.5-1.7-5.9-4l-4.1,4.2
							c-1.6-0.3-2-0.4-3.6-0.7l-2.1-5.5c-4,0.8-3,0.6-7,1.3l0.1,5.8c-1.3,0.9-1.7,1.1-3.1,2l-5.3-2.4c-2.3,3.4-1.7,2.5-4,5.9l4.2,4.1
							c-0.3,1.6-0.4,2-0.7,3.6l-5.5,2.1c0.8,4,0.6,3,1.3,7l5.8-0.1c0.9,1.3,1.1,1.7,2,3.1l-2.4,5.3c3.4,2.3,2.5,1.7,5.9,4l4.1-4.2
							c1.6,0.3,2,0.4,3.6,0.7l2.1,5.5c4-0.8,3-0.6,7-1.3l-0.1-5.8c1.3-0.9,1.7-1.1,3.1-2l5.3,2.4c2.3-3.4,1.7-2.5,4-5.9L36,44.1
							c0.3-1.6,0.4-2,0.7-3.6L42.2,38.5z M22.3,49.5C16.6,50.6,11,46.8,9.9,41s2.7-11.4,8.5-12.5c5.8-1.1,11.4,2.7,12.5,8.5
							C31.9,42.8,28.1,48.4,22.3,49.5z"/>
						<path class="gear2 st2" d="M77.7,21.2c-0.7-3.6-0.5-2.7-1.2-6.4l-5.3,0.1c-0.8-1.2-1-1.6-1.8-2.8l2.2-4.8c-3-2.1-2.3-1.6-5.4-3.6
							l-3.7,3.8c-1.4-0.3-1.8-0.4-3.3-0.7l-1.9-5c-3.6,0.7-2.7,0.5-6.4,1.2l0.1,5.3c-1.2,0.8-1.6,1-2.8,1.8L43.6,8
							c-2.1,3-1.6,2.3-3.6,5.4l3.8,3.7c-0.3,1.4-0.4,1.8-0.7,3.3l-5,1.9c0.7,3.6,0.5,2.7,1.2,6.4l5.3-0.1c0.8,1.2,1,1.6,1.8,2.8L44.3,36
							c3,2.1,2.3,1.6,5.4,3.6l3.7-3.8c1.4,0.3,1.8,0.4,3.3,0.7l1.9,5c3.6-0.7,2.7-0.5,6.4-1.2L64.7,35c1.2-0.8,1.6-1,2.8-1.8l4.8,2.2
							c2.1-3,1.6-2.3,3.6-5.4l-3.8-3.7c0.3-1.4,0.4-1.8,0.7-3.3L77.7,21.2z M59.7,31.2c-5.2,1-10.3-2.4-11.3-7.7s2.4-10.3,7.7-11.3
							s10.3,2.4,11.3,7.7C68.4,25.1,65,30.2,59.7,31.2z"/>
					</g>
					</g>
					<g>
						<g>
							<polygon class="st3" points="30.5,90.3 30.5,61.5 39.9,61.5 39.9,66.3 57.3,66.3 57.3,61.5 66.7,61.5 66.7,90.3 		"/>
							<path class="st3" d="M32.5,88.3V63.5h5.4v4.9h21.4v-4.9h5.4v24.9H32.5z"/>
						</g>
						<g>
							<path class="st4" d="M63.2,64.9v21.9H34V64.9h2.4v12.2h24.3V64.9H63.2z M43.8,74.7h-4.9v-4.9h4.9V74.7z M46.2,84.4v-4.9h-4.9v4.9
							H46.2z M51,69.8h-4.9v4.9H51V69.8z M55.9,84.4v-4.9H51v4.9H55.9z M58.3,69.8h-4.9v4.9h4.9V69.8z"/>
						</g>
					</g>
				<polygon class="arrow st4" points="52.9,60.2 49.8,63.2 49.8,52.8 47.4,52.8 47.4,63.2 44.3,60.2 42.5,61.8 48.6,67.9 54.6,61.8 "/>
			</svg>

			<!-- <span></span>
			<span></span> -->
			<!-- <dir class="cube1"></dir>
			<div class="cube2"></div> -->
		</div>
	</div>

	<?php
		$enable_top_header = get_theme_mod( 'magazine_o_show_top_header', 1 );
		if( $enable_top_header == 1 ) :
	?>
			<!--header infobar-->
			<div class="hdr-infobar">
			    <div class="container">
			        <div class="row">
			        	<?php
			        		$enable_current_date = get_theme_mod( 'magazine_o_show_current_date', 1 );
			        		if( $enable_current_date == 1 ) :
			        	?>
					            <div class="col-md-4 col-sm-3 col-xs-12">
					                <?php
										$current_date = current_time( 'l, j M Y' );
										echo esc_html( $current_date );
									?>
					            </div>
			            <?php
			            	endif;

			            	$enable_top_menu = get_theme_mod( 'magazine_o_show_top_menu', 1 );
			        		if( $enable_top_menu == 1 ) :
			            ?>
					            <div class="col-md-4 col-sm-6 col-xs-12">
					            	<?php
					            		if( has_nav_menu( 'top_menu' ) ) :
					            			wp_nav_menu( array(
					            				'theme_location' => 'top_menu',
					            				'menu_class' => 'hdr-infobar-links'
					            			) );
					            		else: ?>
					            		 <ul class="hdr-infobar-links">
		                                   <?php wp_list_pages( array( 'title_li' => '','depth' =>1 ) ); ?>
		                                </ul>
					            		<?php endif;?>
					            </div>
			            <?php
			            	endif;

			            	$enable_social_icons = get_theme_mod( 'magazine_o_show_social_icons', 1 );
			        		if( $enable_social_icons == 1 ) :
			            ?>
					            <div class="col-md-4 col-sm-3 col-xs-12">
					                <ul class="social topbar-social">
					                	<?php
					                		$facebook_link = get_theme_mod( 'magazine_o_facebook_link', '' );
					                		if( $facebook_link ) :
					                	?>
					                    <li><a href="<?php echo esc_attr( esc_url( $facebook_link ) ); ?>"><i class="fa fa-facebook"></i></a></li>
					                    <?php
					                    	endif;
					                    	$twitter_link = get_theme_mod( 'magazine_o_twitter_link', '' );
					                    	if( $twitter_link ) :
					                    ?>
					                    <li><a href="<?php echo esc_attr( esc_url( $twitter_link ) ); ?>"><i class="fa fa-twitter"></i></a></li>
					                    <?php
					                    	endif;
					                    	$instagram_link = get_theme_mod( 'magazine_o_instagram_link', '' );
					                		if( $instagram_link ) :
					                	?>
					                    <li><a href="<?php echo esc_attr( esc_url( $instagram_link ) ); ?>"><i class="fa fa-instagram"></i></a></li>
					                    <?php
					                    	endif;
					                    	$rss_link = get_theme_mod( 'magazine_o_rss_link', '' );
					                    	if( $rss_link ) :
					                    ?>
					                    <li><a href="<?php echo esc_attr( esc_url( $rss_link ) ); ?>"><i class="fa fa-feed"></i></a></li>
					                    <?php
					                    	endif;
					                    	$linkedin_link = get_theme_mod( 'magazine_o_linkedin_link', '' );
					                    	if( $linkedin_link ) :
					                    ?>
					                    <li><a href="<?php echo esc_attr( esc_url( $linkedin_link ) ); ?>"><i class="fa fa-linkedin"></i></a></li>
					                    <?php
					                    	endif;
					                    	$googleplus_link = get_theme_mod( 'magazine_o_googleplus_link', '' );
					                    	if( $googleplus_link ) :
					                    ?>
					                    <li><a href="<?php echo esc_attr( esc_url( $googleplus_link ) ); ?>"><i class="fa fa-google-plus"></i></a></li>
					                    <?php
					                    	endif;
					                    	$youtube_link = get_theme_mod( 'magazine_o_youtube_link', '' );
					                    	if( $youtube_link ) :
					                    ?>
					                    <li><a href="<?php echo esc_attr( esc_url( $youtube_link ) ); ?>"><i class="fa fa-youtube"></i></a></li>
					                    <?php
					                    	endif;
					                    ?>
					                </ul>
					            </div>
			            <?php
			            	endif;
			            ?>
			        </div>
			    </div>
			</div>
			<!--/header infobar-->
	<?php
		endif;
	?>

	<!--header-->
	<div class="hdr" style="background-image: url( <?php if( has_header_image() ) { header_image();  } ?> ); background-size: cover;">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-4 col-xs-12">
	                <div id="logo">
						<?php
							if( has_custom_logo() ) :
								the_custom_logo();
							else :
							?>
								<a class="navbar-brand navbar-brand-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<h1 class="site-title"><em><?php bloginfo( 'name' ); ?></em></h1>
									<h5 class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></h5>
								</a>

			                <?php
			                endif;
			            ?>

					</div>
			    </div>
	            <?php
	            	if( is_active_sidebar( 'sidebar-5' ) ) :
	            ?>
	            <div class="col-sm-8 col-xs-12">
	               	<div class="ads-780x90 hdr-ads-780x90">
	                    <?php
	                    	dynamic_sidebar( 'sidebar-5' );
	                    ?>
					</div>

	            </div>
	            <?php
	            	endif;
	            ?>
	        </div>
	    </div>
	    <!--header nav-->
	    <div class="hdr-nav">
	        <div class="container">
	            <div class="row">
		            <div class="col-sm-12 col-xs-12">

		                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		                  <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'magazine-o' ); ?></span>
		                  <span class="icon-bar"></span>
		                  <span class="icon-bar"></span>
		                  <span class="icon-bar"></span>
		                </button>

				<!--navbar-->
		                <?php
						if( has_nav_menu( 'primary_menu' ) ) :
					        wp_nav_menu( array(
					            'theme_location'    => 'primary_menu',
					            'depth'             => 3,
					            'container'         => 'div',
					            'container_class'   => 'collapse navbar-collapse',
					            'container_id'      => 'bs-example-navbar-collapse-1',
					            'menu_class'        => 'nav navbar-nav',
					            'fallback_cb'       => 'Magazine_O_Bootstrap_Navwalker::fallback',
					            'walker'            => new Magazine_O_Bootstrap_Navwalker())
					        );
					        else : ?>
					        		<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                            			<ul id="menu-primary-1" class="nav navbar-nav">
                            				<?php wp_list_pages( array( 'title_li' => '','depth' =>1 ) ); ?>
                        				</ul>
                        			</div>
						    <?php  endif; ?>
				    <!--/navbar-->

		                    <!--search div-->
		                    <div class="hdr-search">
		                        <!-- Button trigger modal -->
		                        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-default navbar-btn">
		                            <i class="fa fa-search" aria-hidden="true"></i>
		                        </button>
		                        <!-- Modal -->
		                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
		                          <div class="modal-dialog" role="document">
		                            <div class="modal-content">
		                              <div class="modal-header">
		                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close" aria-hidden="true"></i></button>
		                              </div>
		                              <div class="modal-body">

		                                <h1><?php esc_html_e('Search','magazine-o'); ?></h1>
		                                <form class="navbar-form " role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		                                  <div class="form-group">
		                                    <input class="form-control" type="search" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Saya ingin mencari ...">
		                                  </div>
		                                  <button type="submit" class="btn btn-default" value="query"><?php printf('<i class="fa fa-search" aria-hidden="true"></i>','magazine-o'); ?></button>
		                                </form>

		                              </div>

		                            </div>
		                          </div>
		                        </div>
		                    </div>
		                    <!--/search div-->

		            </div>
	        	</div>
	        </div>
	    </div>
	    <!--header nav-->
	</div>
	<!--/header-->
