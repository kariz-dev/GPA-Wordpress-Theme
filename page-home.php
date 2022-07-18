<?php
/**
 * Template Name: Home Page
 * Description: This is template for homepage
 *
 */

get_header(); ?>

    <!-- Banner -->
    <?php if (have_rows("banner")):
      while (have_rows("banner")):
        the_row();
        $banner_logo = get_sub_field("banner_logo");
        $banner_heading = get_sub_field("banner_heading");
        $banner_subheading = get_sub_field("banner_subheading");
        $banner_desc = get_sub_field("banner_desc");
      endwhile;
    endif; ?>
    <div class="banner">
        <img class="banner_logo" src="<?php echo $banner_logo["url"]; ?>" alt="<?php echo $banner_logo["alt"]; ?>" />
        <h1 class="banner_heading"><?php echo $banner_heading; ?></h1>
        <h1 class="banner_heading"><?php echo $banner_subheading; ?></h1>
        <p class="banner_subheading"><?php echo $banner_desc; ?></p>
    </div>

    <!-- About Us -->
    <?php if (have_rows("about")):
      while (have_rows("about")):
        the_row();
        $about_image = get_sub_field("about_image");
        $about_heading = get_sub_field("about_heading");
        $about_desc = get_sub_field("about_desc");
      endwhile;
    endif; ?>
    <div class="about">
      <h2 class="about__heading"><?php echo $about_heading; ?></h2>
      <div class="about__content row">
        <div class="about__content__desc col order-last order-md-first">
          <p><?php echo $about_desc; ?></p>
        </div>
        <div class="about__content__image col order-first order-md-last">
          <img src="<?php echo $about_image["url"]; ?>" alt="<?php echo $about_image['alt'] ;?>" />
        </div>
      </div>
    </div>

    <!-- Testimonial Carousel -->
    <?php
      $testimonials = get_field('testimonial');
      if( $testimonials ): ?>
        <div class="testimonial__carousel">
            <h2 class="testimonial_heading"><?php the_field( 'testimonial_heading' ); ?></h2>
            <!-- Slider main container -->
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <?php foreach( $testimonials as $post ): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                    <div class="swiper-slide">
                      <a href="<?php the_field( 'testmonial_youtube_link' ); ?>" target="_blank">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="">
                        <span class="iconify" data-icon="bi:play-fill" style="color: white;"></span>
                      </a>
                    </div>
                <?php endforeach; ?>
              </div>
            <div class="swiper-pagination"></div>
        </div>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <!-- Article Carousel -->
    <?php
      $featured_posts = get_field('article');
      if( $featured_posts ): ?>
        <div class="article__carousel">
            <h2 class="article__heading"><?php the_field( 'article_heading' ); ?></h2>
            <!-- Slider main container -->
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <?php foreach( $featured_posts as $post ): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                    <div class="swiper-slide">
                      <a href="<?php the_field( 'my_articles_link' ); ?>" target="_blank">
                        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ;?>">
                        <p class="card-text">
                          <?php 
                            $num_char = 100;
                            $text = get_the_title();
                            echo substr($text, 0, $num_char);
                          ?>
                          <span class="read-more"><i>Read More</i></span>
                        </p>
                      </a>
                    </div>
                <?php endforeach; ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
        </div>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    
    <!-- Event Carousel -->
    <?php
      $events = get_field('event');
      if( $events ): ?>
        <div class="event__carousel">
          <h2 class="event__heading"><?php the_field( 'event_heading' ); ?></h2>
          <!-- Slider main container -->
          <div class="swiper swiper-gallery">
            <div class="swiper-wrapper">
              <?php foreach( $events as $post ): // variable must be called $post (IMPORTANT) ?>
                  <?php setup_postdata($post); ?>
                  <div class="swiper-slide">
                    <a href="<?php the_field( 'event_youtube_link' ); ?>" target="_blank">
                      <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="">
                      <div class="event__desc">
                        <h3 class="event__year"><?php the_field( 'event_years' ); ?></h3>
                        <h3 class="event__year__desc"><?php the_field( 'event_text_first_line' ); ?></h3>
                        <h3 class="event__year__desc"><?php the_field( 'event_text_second_line' ); ?></h3>
                      </div>
                      <span class="iconify" data-icon="bi:play-fill" style="color: white;"></span>
                    </a>
                  </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <!-- Gallery -->
    <?php
      $galleries = get_field('gallery');
      if( $galleries ): ?>
      <div class="gallery container">
        <h2 class="gallery__heading"><?php the_field( 'gallery_heading' ); ?></h2>
        <div class="gallery-wrap row">
        <?php foreach( $galleries as $post ): // variable must be called $post (IMPORTANT) ?>
                      
          <?php setup_postdata($post); ?>

          <div class="gallery-item col-6 col-md-3 g-1">
            <div class="card">
              <img src="<?php echo $post->guid; ?>" class="card-img-top" alt="...">
            </div>
          </div>
          
          <?php endforeach; ?>
        
        </div>
        
      </div>
      
      <button class="btn" id="load-more">Load more</button>
          
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>


<?php get_footer();
