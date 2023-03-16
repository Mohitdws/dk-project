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
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<div class="services-section">
      <div class="container">
      	<div class="row">
<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
?>
 
<div class="col-md-4 blog-tab">
            <a href="<?php the_permalink(); ?>">
              <div class="blog-section">
                <div class="blog-image">
               <?php the_post_thumbnail(); ?>
                </div>
                <div class="blog-title">
                 <?php echo the_title(); ?>
                </div>
                <div class="blog-subtitle">
                  <?php echo the_excerpt(); ?>
                </div>
                <div class="blog-date">
                <?php echo get_the_date(); ?>
                </div>
                <div class="blog-admin">
                <?php echo the_author(); ?>
                </div>
              </div>
            </a>
          </div>

      




<?php
		
	}
	twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}?>
</div></div></div>

<?php get_footer();?>
