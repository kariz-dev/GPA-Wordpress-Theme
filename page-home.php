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
            <h2><?php the_field( 'testimonial_heading' ); ?></h2>
            <!-- Slider main container -->
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <?php foreach( $testimonials as $post ): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                    <div class="swiper-slide">
                      <a href="<?php the_field( 'testmonial_youtube_link' ); ?>" target="_blank">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="">
                      </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <!-- Article Carousel -->
    <?php
      $featured_posts = get_field('article');
      if( $featured_posts ): ?>
        <div class="article__carousel">
            <h2><?php the_field( 'article_heading' ); ?></h2>
            <!-- Slider main container -->
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <?php foreach( $featured_posts as $post ): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                    <div class="swiper-slide">
                      <a href="<?php the_field( 'my_articles_link' ); ?>" target="_blank">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text"><?php the_title() ;?></p>
                        </div>
                      </a>
                    </div>
                <?php endforeach; ?>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
        </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    
    <!-- Event Carousel -->
    <?php
      $events = get_field('event');
      if( $events ): ?>
        <div class="event__carousel">
            <h2><?php the_field( 'event_heading' ); ?></h2>
            <!-- Slider main container -->
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <?php foreach( $events as $post ): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                    <div class="swiper-slide">
                      <a href="<?php the_field( 'event_youtube_link' ); ?>" target="_blank">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="">
                      </a>
                    </div>
                <?php endforeach; ?>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
        </div>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>


    <!-- testing relations galleries -->
    <?php
      $galleries = get_field('gallery');
      if( $galleries ): ?>
        <div class="gallery">
            <h2 class="heading"><?php the_field( 'gallery_heading' ); ?></h2>
                <?php foreach( $galleries as $post ): // variable must be called $post (IMPORTANT) ?>
                  
                    <?php setup_postdata($post); ?>
                    
                    <div class="box-gallery">
                      <div class="box">
                        <div class="image">
                          <img src="<?php echo $post->guid; ?>" alt="">
                          <div class="content">
                            <h3>title blog</h3>
                            <p>lorem ipsum</p>
                          </div>
                        </div>
                      </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

 
    <!-- show the media gallery -->
    

    <!-- Gallery -->
    <?php
      $galleries = get_field('gallery');
      if( $galleries ): ?>
   <div class="gallery">
    <h1 class="heading">This Is New Heading</h1>
    <div class="box-gallery">
    <?php foreach( $galleries as $post ): // variable must be called $post (IMPORTANT) ?>
                  
      <?php setup_postdata($post); ?>

      <div class="box">
        <div class="image">
          <img src="<?php echo $post->guid; ?>" alt="" srcset="">
          <div class="content">
            <h3>title blog</h3>
            <p>lorem ipsum</p>
          </div>
        </div>
      </div>
      
      <?php endforeach; ?>
     
    </div>
    
   </div>
   <button id="load-more">Load more</button>
   <?php wp_reset_postdata(); ?>
    <?php endif; ?>


<?php get_footer();
