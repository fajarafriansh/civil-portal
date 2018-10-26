<?php
/**
 * Template Name: No Sidebar
 */

get_header(); ?>

<div class="main-page">
    <div class="container">

        <div class="row">

            <!--primary inside -->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="primary">
					<?php
						while( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
					?>
                </div>
            </div>

        </div>

    </div>
</div>

<?php
get_footer();
