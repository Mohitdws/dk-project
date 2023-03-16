<?php
/*
Template Name: Blogs
*/
?>
<?php get_header(); ?>

<div class="breadcrumb-image" style="background-image: url(<?php the_field('breadcrumb_image'); ?>)">
   <?php if( get_field('breadcrumb_title') ): ?>
      <div class="breadrumb-heading">
        <h1><?php the_field('breadcrumb_title'); ?></h1>
      </div>
      <?php endif; ?>
    </div>
    <div class="navigation-breadcrumb">
      <div class="container">
        <div class="breadcrumb">
          <a href="<?php echo get_home_url(); ?>">HOME</a>
          <span>/</span>
          <a href="#" class="active">contact us</a>
        </div>
      </div>
    </div>
    <div class="services-section">
      <div class="container">
        <div class="heading p-38">
          <p class="service-heading">OUR BLOG</p>
        </div>
        <div class="row">
        <?php
        if ( get_query_var('blogs') ) $paged = get_query_var('blogs');
        $query = new WP_Query( array( 'post_type' => 'blogs', 'paged' => $paged ) );
        if ( $query->have_posts() ) : ?>
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-md-4 blog-tab">
            <a href="">
              <div class="blog-section">
                <div class="blog-image">
               <?php the_post_thumbnail(); ?>
                </div>
                <div class="blog-title">
                 <?php echo the_title(); ?>
                </div>
                <div class="blog-subtitle">
                  <?php echo the_content(); ?>
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
          <?php endwhile; wp_reset_postdata(); ?>
<!-- show pagination here -->
<?php else : ?>
<!-- show 404 error here -->
<?php endif; ?>
          
    
   <?php get_footer(); ?>
