<?php
/*
Template Name: Contact Us
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
    <section class="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.4020533261173!2d145.11628791567273!3d-37.94439727972897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66b417edde331%3A0x93516b668db5b68c!2sUnit%2017%2F266%20Osborne%20Ave%2C%20Clayton%20South%20VIC%203169%2C%20Australia!5e0!3m2!1sen!2sin!4v1664179277194!5m2!1sen!2sin" width="100%" height="530" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <div class="row">
      <div class="col-md-6 contact-form">
        <h2 class="form-heading-contact">feel free to contact us</h2>
        <?php echo do_shortcode( '[contact-form-7 id="191" title="contact page form"]' ); ?>
      </div>
      <div class="col-md-6 p-0">
        <div class="row p-0">
          <div class="col-md-12 p-0">
            <?php if( get_field('form-image-right') ): ?>
            <img src="<?php the_field('form-image-right'); ?>" class="contact-form">
             <?php endif; ?>
          </div>
          <div class="col-md-12 contact-second-section">
            <?php if( get_field('form_title_right') ): ?>
            <h3 class="contact-second-heading"><?php the_field('form_title_right'); ?></h3>
            <?php endif; ?>
            <?php if( get_field('form_description_right') ): ?>
            <p><?php the_field('form_description_right'); ?></p>
            <?php endif; ?>
            <?php if( get_field('form_subheading') ): ?>
            <h3 class="contact-form-subheading">
              <span><?php the_field('form_subheading'); ?></span>
            </h3>
            <?php endif; ?>
            <?php if( get_field('form_address') ): ?>
            <h3 class="contact-form-subheading address-contact">
              <span>Address:</span> <?php the_field('form_address'); ?>
            </h3>
            <?php endif; ?>
            <?php if( get_field('form_phone_no') ): ?>
            <h3 class="contact-form-subheading">
              <span>Call: <a style="color:#000;font-family: 'Montserrat-ExtraBold';font-size: 18px" href="tel:<?php the_field('form_phone_no'); ?>"><?php the_field('form_phone_no'); ?></a></span>
            </h3>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
   <?php get_footer(); ?>
