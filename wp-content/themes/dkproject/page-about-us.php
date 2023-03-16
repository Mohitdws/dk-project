<?php
/*
Template Name: About Us
*/
?>
<?php get_header(); ?>

<div class="breadcrumb-image" style="background-image: url(<?php the_field('breadcrumb_image'); ?>)">
   <?php if( get_field('breadcrumb_image') ): ?>
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
          <a href="#" class="active">ABOUT US</a>
        </div>
      </div>
    </div>
    <div class="details-container">
      <div class="container">
        <?php if( get_field('about_us_title') ): ?>
              <div class="heading main-heading"><?php the_field('about_us_title'); ?></div>
                 <?php endif; ?>
        
        <div class="row">
          <div class="col-md-6">
             <?php if( get_field('about_us_image') ): ?>
            <div class="service-image">
              <img src="<?php the_field('about_us_image'); ?>">
            </div>
            <?php endif; ?>
          </div>
          <div class="col-md-6">
            <div class="description-content">
              <?php if( get_field('about_us_content') ): ?>
              <div class="subheading description"><?php the_field('about_us_content'); ?></div>
              <?php endif; ?>
              <?php if( get_field('about_us_button') ): ?>
              <div class="button-global">
                <a href="<?php the_field('about_us_button_link'); ?>" class="global-button pl-55">
                  <span><?php the_field('about_us_button'); ?></span>
                </a>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2 class="form-heading">Request an appointment online</h2>
            <?php echo do_shortcode( '[contact-form-7 id="117" title="Homepage Contact Form"]' ); ?>
          </div>
          <div class="col-md-4">
            <div class="form-image">
              <img src="<?php echo get_template_directory_uri().'/assets/images/form-image.png'; ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="services-section about-section">
      <div class="container">
        <div class="row db">
          <div class="heading p-38 p-80">
            <p class="service-heading">WHAT PEOPLE SAY</p>
            <div class="container">
              <div class="owl-carousel owl-theme our_project_slider">
                


<?php
if ( get_query_var('testimonials') ) $paged = get_query_var('tetsimonials');


$query = new WP_Query( array( 'post_type' => 'testimonials', 'paged' => $paged ) );

if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="pro_item">
                  <div class="slide-box">
                    <div class="slider-wrap">
                      <div class="image-testimonials">
                        <?php the_post_thumbnail(); ?>
                        <h4 class="job"><?php the_field('testimonials_designation'); ?></h4>
                      </div>
                      <div class="description-testimonials">
                        <h3 class="name"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <span class="ratings">
                          <?php the_field('testimonials_rating'); ?>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <?php endwhile; wp_reset_postdata(); ?>
<!-- show pagination here -->
<?php else : ?>
<!-- show 404 error here -->
<?php endif; ?>
                
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="faq-section">
      <div class="container">
        <div class="row db">
          <div class="faq-heading">
            <p>FREQUENTLY ASKED <span>QUESTIONS</span>
            </p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-10 custom-w">
            <div class="wrapper">
              <?php 
                  if ( get_field('frequently_asked_questions','option')){ 
                  while (has_sub_field('frequently_asked_questions','option')){
                ?>
                   
                
              <div class="container faq">
                <div class="question"><?php the_sub_field('question','option'); ?></div>
                <div class="answercont">
                  <div class="answer">
                   <?php the_sub_field('answer','option'); ?>
                  </div>
                </div>
              </div>
              <?php } } ?>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>
      </div>
    </div>
   <?php get_footer(); ?>
