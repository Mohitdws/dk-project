<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

<!-- HEADER Start -->

    <div class="slider">

    					
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <?php 
           $i=1;
          if(get_field('banner_slider')){
          while( has_sub_field ('banner_slider'))

           {
          $bannerImg = get_sub_field('banner_image');
          if ($bannerImg) {
          $imgUrl = $bannerImg['url'];
          $imgTitle = $bannerImg['title'];
          $imgAlt = $bannerImg['alt'];
          $imgCaption = $bannerImg['caption'];
          }

          $bannerTitle = get_sub_field('banner_title');
          $bannersubtitle = get_sub_field('banner_subtitle');
          
          $btnlink = get_sub_field('banner_button'); 
          if ($btnlink) {
          $link_url = $btnlink['url'];
          $link_title = $btnlink['title'];
          $link_target = $btnlink['target'] ? $btnlink['target'] : '_self';
          }
          
        ?>
        
          <div class="item <?php if($i == 1) {echo 'active'; } else{echo '';}?>">
            <div class="overlay"></div>
            <img src="<?php echo $imgUrl; ?>');" alt="...">
            <div class="carousel-caption">
                <?php if($bannerTitle){ ?>
                  <h2 class="banner-description"><?php echo $bannerTitle; ?></h2>
                <?php } ?>
                <?php if($bannersubtitle){ ?>
              <h3 class="banner-subdescription"><?php echo $bannersubtitle; ?></h3>
              <?php } ?>
              <?php if ( $btnlink ) { ?>
              <div class="button-global">
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="global-button">
                  <span><?php echo esc_html( $link_title ); ?></span>
                </a>
              </div>
              <?php } ?>
            </div>
          </div>
          <?php $i++;?>
        
          

          
         <?php } } ?>
          
        </div>
        <Controls>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </Controls>
      </div>
    </div>
  
    <div class="service-intro">
      <div class="container mxw-1400">
        <div class="row">
          <div class="col-md-4 services-block col-sm-4">
            <div class="services-black">
              <?php if( get_field('after_banner_icon-1') ): ?>
              <div class="service-icon">
                <img src="<?php the_field('after_banner_icon-1'); ?>">
              </div>
              <?php endif; ?>
              <?php if( get_field('after_banner_icon_text-1') ): ?>
              <div class="service-text">
                <p><?php the_field('after_banner_icon_text-1'); ?></p>
              </div>
              <?php endif; ?>

            </div>
          </div>
          <div class="col-md-4 services-block col-sm-4">
            <div class="services-red">
              <?php if( get_field('after_banner_icon-2') ): ?>
              <div class="service-icon">
                <img src="<?php the_field('after_banner_icon-2'); ?>">
              </div>
              <?php endif; ?>
              <?php if( get_field('after_banner_icon_text-2') ): ?>
              <div class="service-text">
                <a href="tel:<?php the_field('after_banner_icon_text-2'); ?>"><?php the_field('after_banner_icon_text-2'); ?></a>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-4 services-block col-sm-4">
            <div class="services-black">
              <?php if( get_field('after_banner_icon-3') ): ?>
              <div class="service-icon">
                <img src="<?php the_field('after_banner_icon-3'); ?>">
              </div>
              <?php endif; ?>
              <?php if( get_field('after_banner_icon_text-3') ): ?>
              <div class="service-text">
                <p><?php the_field('after_banner_icon_text-3'); ?></p>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="details-container">
      <div class="container">
        <div class="row p-b40">
          <div class="col-md-6">
            <?php if( get_field('about_us_image') ): ?>
            <div class="service-image">
              <img src="<?php the_field('about_us_image'); ?>">
            </div>
            <?php endif; ?>
          </div>
          <div class="col-md-6">
            <div class="description-content">
              <?php if( get_field('about_us_title') ): ?>
              <div class="heading"><?php the_field('about_us_title'); ?></div>
                 <?php endif; ?>
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
        <div class="row">
          <div class="col-md-6">
            <div class="description-content">
              <?php if( get_field('our_story_title') ): ?>
              <div class="heading"><?php the_field('our_story_title'); ?></div>
              <?php endif; ?>
              <?php if( get_field('our_story_content') ): ?>
              <div class="description">
                <p><?php the_field('our_story_content'); ?></p>
              </div>
              <?php endif; ?>
              <?php if( get_field('our_story_button') ): ?>
              <div class="button-global p-40">
                <a href="<?php the_field('our_story_button_link'); ?>" class="global-button pl-55">
                  <span><?php the_field('our_story_button'); ?></span>
                </a>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-6 handyman">
            <?php if( get_field('our_story_image') ): ?>
            <div class="service-image">
              <img src="<?php the_field('our_story_image'); ?>">
             <img src="<?php the_field('our_story_overlaping_image'); ?>" class="handy-image">
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-service-icons">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <div class="service-icon-block">
              <?php if( get_field('icon-1') ): ?>
              <div class="service-icon-img">
                <img src="<?php the_field('icon-1'); ?>">
              </div>
               <?php endif; ?>
               <?php if( get_field('icon-1-text') ): ?>
              <div class="service-icon-description">
                <p><?php the_field('icon-1-text'); ?></p>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="service-icon-block">
              <?php if( get_field('icon-2') ): ?>
              <div class="service-icon-img">
                <img src="<?php the_field('icon-2'); ?>">
              </div>
               <?php endif; ?>
               <?php if( get_field('icon-2-text') ): ?>
              <div class="service-icon-description">
                <p><?php the_field('icon-2-text'); ?></p>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
           <div class="service-icon-block">
              <?php if( get_field('icon-3') ): ?>
              <div class="service-icon-img">
                <img src="<?php the_field('icon-3'); ?>">
              </div>
               <?php endif; ?>
               <?php if( get_field('icon-3-text') ): ?>
              <div class="service-icon-description">
                <p><?php the_field('icon-3-text'); ?></p>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="service-icon-block">
              <?php if( get_field('icon-4') ): ?>
              <div class="service-icon-img">
                <img src="<?php the_field('icon-4'); ?>">
              </div>
               <?php endif; ?>
               <?php if( get_field('icon-4-text') ): ?>
              <div class="service-icon-description">
                <p><?php the_field('icon-4-text'); ?></p>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
   
<div class="services-section">
  <div class="container">
    <div class="heading">
      <p class="service-heading">OUR SERVICES</p>
    </div>
    <div class="row">
      <?php
if ( get_query_var('services') ) $paged = get_query_var('services');
$query = new WP_Query( array( 'post_type' => 'services', 'orderby' => 'date','paged' => $paged ) );
if ( $query->have_posts() ) : ?> <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="col-md-4 service-tab">
        <a href="<?php the_permalink(); ?>">
          <div class="main-service">  
            <div class="main-service-img">
              <div class="entry"> <?php the_post_thumbnail(); ?> </div>
              
            </div>
            <div class="main-service-title">
                <p> <?php the_title(); ?> </p>
              </div>
              <div class="main-service-button">
                <span class="service-details-fav-icon"></span>
                <p>Detail Service</p>
              </div>
            </div> 
        </a>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
            <!-- show pagination here --> <?php else : ?>
            <!-- show 404 error here --> <?php endif; ?>

            <div class="col-md-12" style="text-align: center;padding-bottom: 62px;margin-top: -30px;">
                  <div class="button-global">
                    <a href="#" class="global-button">
                      <span>Contact Us</span>
                    </a>
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
              <?php if( get_field('form-image') ): ?>
              <img src="<?php the_field('form-image'); ?>">
              <?php endif; ?>
            </div>
          </div>
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
        
        $query = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged ) );
        if ( $query->have_posts() ) : ?>
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
          <?php endwhile; wp_reset_postdata(); ?>
<!-- show pagination here -->
<?php else : ?>
<!-- show 404 error here -->
<?php endif; ?>
          
         
        </div>
        <div class="row db">
          <div class="heading p-38">
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
