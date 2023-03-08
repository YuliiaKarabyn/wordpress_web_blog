<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog
 */

?>
	<div class='container-fluid py-5' style="background-image: url('<?php the_post_thumbnail_url();?>');">
		<div class="row justify-content-center d-flex">
			<div class="col-md-10 entry-header py-md-2 justify-content-start d-flex flex-column align-items-start">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title dark-grey-color">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title blue-сolor"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						blog_posted_on();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</div><!-- .entry-header -->
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center d-flex">
			<div class="col-md-10">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php
						the_content();
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blog' ),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->
			</div>
		</div>
	</div>