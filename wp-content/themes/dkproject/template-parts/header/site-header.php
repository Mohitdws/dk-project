<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="custom-header">
    <div class="container">
      <div class="row">
        <div class="col-md-5 header-p">
          
            <?php wp_nav_menu( array( 'theme_location' => 'left-menu' ) ); ?>
          
        </div>
        <div class="col-md-2">
          <a href="<?php echo get_home_url(); ?>" class="header img">
            <img src="<?php the_field('header_logo','option'); ?>">
          </a>
        </div>
        <div class="col-md-5 header-p">
        
            <?php wp_nav_menu( array( 'theme_location' => 'right-menu' ) ); ?>
      
        </div>
      </div>
    </div>
  </header>
