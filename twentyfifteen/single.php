<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			 ?>
			 <section class="">
            <div class="odd-text-1" style="padding-top:70px;">
			
				</div>
			</section>
			
				 <section class="">
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid  blog-1">
						<div class="oddbods-textimg desktop_singlepostimg">
							
					
						<?php
				//get_template_part( 'content', get_post_format() );
					
$pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');    


if ( $pic['0'] ) {
//if ( $pic && is_single() ) {
    ?>
    <style type="text/css">
        .odd-text-1 {
            background-image: url('<?php echo $pic['0'];?> ');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
			background-size: cover;
	    	width: 100%!important;
			height:100vh;
    		min-height: 100%;
            margin: 0px;
        }
	.mob-postimg
	{
	    background-size: cover;
    width: 347px;
    height: 258px;
    margin: 0 auto;
    float: none;
    min-height: 100%;
	}

    </style>
 
    <?php
}
	
			// If comments are open or we have at least one comment, load up the comment template.
			/*if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );*/

		// End the loop.
		
		endwhile;
		?>
				   
		
							
				</div>
				 <?php $attachment_id = get_field('blog_post_section');
$size = "thumbnail"; // (thumbnail, medium, large, full or custom size)
$image = wp_get_attachment_image_src( $attachment_id, $size );
// url = $image[0];
// width = $image[1];
// height = $image[2];
?>
<!--<img src="<?php //echo $image[0]; ?>" class="mob-postimg" />-->
				 <div class=" blog-1">
							<div class="oddbods-text">
							<h1>
							<?php
							the_title();?></h1>
							<?php
								the_content(); ?> 
							</div>
						</div>
					</div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
        <!-- ODDBODS TEXT END -->
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
