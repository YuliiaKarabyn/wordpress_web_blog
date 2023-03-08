<?php
	/**
	 * Template Name: Main Page 
	 */ 
	get_header();
?>
    <section class= "hero-home d-flex align-items-center bg-light-gray-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <h1 class="green-color"><?php the_field('hero_title'); ?></h1>
                    </div>
                </div>
            </div>
    </section>

    <section class="about" id="about">
        <?php 
            $about = get_field('about');
            get_template_part( 'sections/about', null, array('data' => $about) ); 
        ?>
    </section>

    <!-- <section class="our_values bg-gray">
        <?php 
        $our_values = array(
            'title' => get_field('our_values')['title'],
            'benefits' => get_field('our_values')['values']
        );
        get_template_part( 'sections/why-we', null, array('data' => $our_values) ); 
        ?>
    </section> -->

   <section class="topics bg-green-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <ul class="d-flex m-0 p-0">
                        <?php wp_list_categories( array(
                            'orderby'    => 'name',
                            'show_count' => false
                        ) ); ?>
                    </ul>
                </div>
            </div>
        </div>
   </section>

    <section class="blog  mb-100 bg-green-color">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="dark-grey-color mb-5">Recent News</h2>
                </div>
                    </div>
            <div class="row">
                    <?php 
                     $args = array(
                        'posts_per_page' => 3,
                    );
                    $query = new WP_Query( $args );
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                             $query->the_post();?>
                            <div class="col-lg-4  item p-0 wow fadeInUp" data-wow-delay=".3s">
                                
                                    <img class="img" id="" src="<?php echo get_the_post_thumbnail_url(); ?>">
                                    <div class="post-content">
                                    <p class="date m-2"><?php echo get_the_date(); ?></p>
                                    <h5> <a href="<?php the_permalink(); ?>" class='text-decoration-none'><?php echo get_the_title();?></a></h5>
                                    <a class="simple-btn text-decoration-none" href="<?php the_permalink(); ?>">More</a>
                            </div>
                                
                            </div>
                            <?}
                        } else {
                            }
                            wp_reset_postdata();
                            ?>
            </div>
        </div>
    </section>


    <section class="contact_form" id="contact">
        <?php 
            $contact = get_field('contact');
            get_template_part( 'sections/contact', null, array('data' => $contact) ); 
        ?>
    </section> 
 

<?php
	get_footer();
?>