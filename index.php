<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="mb-100 position-relative">
        <div class="container-fluid pt-50 blue-bg position-relative">
            <div class="row">
				<div class="col-md-5 d-flex justify-content-center align-items-start bg-creamlightcolor">
                    <div class="sticky">
                        <h1 class="dark-grey-color">Lorem<br>Lorem<br>Lorem</h1>
                    </div>
                </div>
				<div class="col-md-7 articles">
                     <?php 
                        $args = array(
                                'posts_per_page' => 12,
                            );
                            $query = new WP_Query( $args );
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();?>
                    <div class="item mb-80 wow fadeInUp" data-wow-delay=".3s">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-6 valignn">
                                <div class="cont">
                                    <div>
                                        <div class="info">
                                            <p class="date"><?php   echo get_the_date(); ?></p>
                                            <h5><a href="<?php the_permalink(); ?>" class='text-decoration-none blue-сolor'><?php echo get_the_title();?></a></h5>
                                            <p class="mt-10"><?php the_field('evendescription'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 valign p-0">
                                <div class="img md-mb50">
                                    <img class="img" id="" src="<?php echo get_the_post_thumbnail_url(); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                        <?}
                            } else {
                            }
                            wp_reset_postdata();
                        ?>
                </div>
			</div>
        </div>
    </section>
    <section class="afterblog">
    <?php 
            $cta = get_field('cta');
            get_template_part( 'sections/cta', null, array('data' => $cta) ); 
        ?>
    </section>

</main><!-- #main -->



<?php

get_footer();
