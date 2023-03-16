<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	

	<div class="service-intro-footer">
      <div class="container mxw-1400">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="services">
              <?php if( get_field('footer_1st_column_title','option') ): ?>
              <div class="service-text">
                <p><?php the_field('footer_1st_column_title','option'); ?></p>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="services-footer-black">
              <?php if( get_field('footer_2nd_column_title','option') ): ?>
              <div class="service-text">
                <p><a href="mailto:<?php the_field('footer_2nd_column_title','option'); ?>">Email</a></p>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="services">
              <?php if( get_field('footer_3rd_column_title','option') ): ?>
              <div class="service-text">
                <p><?php the_field('footer_3rd_column_title','option'); ?></p>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="footer-section">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <?php if( get_field('footer_logo','option') ): ?>
              <div class="footer-logo">
                <a href="<?php echo get_home_url(); ?>"><image src="<?php the_field('footer_logo','option'); ?>"></a>
              </div>
              <?php endif; ?>
            </div>
            <div class="col-md-3 footer-links">
              <h3 class="footer-heading">Quick Links</h3>
              <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
            </div>
            <div class="col-md-3  footer-links">
              <h3 class="footer-heading">Find Us</h3>
              <div class="footer-location">
                <div class="location">
                  
                  <div class="location-wrap">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/location-icon.png';?>">
                    <h3>Location</h3>
                  </div>
                  
                  <p><?php the_field('find_us_location_address','option'); ?></p>
                  
                </div>
                <?php if( get_field('find_us_phone_no','option') ): ?>
                <div class="phone">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/phone-icon.png'; ?>">
                  <a href="tel:<?php the_field('find_us_phone_no','option'); ?>"><?php the_field('find_us_phone_no','option'); ?></a>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-3  footer-social">
              <div class="social-icon-links">
                <h3 class="social-heading">Follow Us </h3>
                <a href="<?php the_field('social-icon-1-link','option'); ?>">
                  <img src="<?php the_field('social-icon-1','option'); ?>">
                </a>
                <a href="<?php the_field('social-icon-2-link','option'); ?>">
                  <img src="<?php the_field('social_icon_2','option'); ?>">
                </a>
                <a href="<?php the_field('social-icon-3-link','option'); ?>">
                  <img src="<?php the_field('social_icon_3','option'); ?>">
                </a>
                <a href="<?php the_field('social-icon-4-link','option'); ?>">
                  <img src="<?php the_field('social_icon_4','option'); ?>">
                </a>
            </div>
            </div>
          </div>
          <div class="copyright row">
            <?php if( get_field('copyright_text','option') ): ?>
            <div class="col-md-6">
              <p class="copyright-text"><?php the_field('copyright_text','option'); ?></p>
            </div>
            <?php endif; ?>
            <div class="col-md-6 copyright-text-2">
              <p><?php the_field('copyright_right_text','option'); ?><span>
                  <img src="<?php the_field('copyright_right_image','option'); ?>" class="foo-image">
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

</div><!-- #page -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>


    
    <script>
      let question = document.querySelectorAll(".question");
      question.forEach(question => {
        question.addEventListener("click", event => {
          const active = document.querySelector(".question.active");
          if (active && active !== question) {
            active.classList.toggle("active");
            active.nextElementSibling.style.maxHeight = 0;
          }
          question.classList.toggle("active");
          const answer = question.nextElementSibling;
          if (question.classList.contains("active")) {
            answer.style.maxHeight = answer.scrollHeight + "px";
          } else {
            answer.style.maxHeight = 0;
          }
        })
      })
    </script>
</body>
</html>
