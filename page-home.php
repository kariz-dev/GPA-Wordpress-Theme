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
        $banner_bg_dekstop = get_sub_field("banner_bg_dekstop");
        $banner_bg_mobile = get_sub_field("banner_bg_mobile");
        $banner_image = get_sub_field("banner_image");
        $banner_content = get_sub_field("banner_content");
      endwhile;
    endif; ?>
    <div class="banner" style="background: url('<?php echo $banner_bg_dekstop[
      "url"
    ]; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <img src="<?php echo $banner_image["url"]; ?>" alt="" />
        <h1><?php echo $banner_content["banner_content_heading"]; ?></h1>
        <h1><?php echo $banner_content["banner_content_subheading"]; ?></h1>
        <p><?php echo $banner_content["banner_content_desc"]; ?></p>
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
        <h1><?php echo $about_heading; ?></h1>
        <div class="about__content row">
            <div class="about__content__heading col">
                <p><?php echo $about_desc; ?></p>
            </div>
            <div class="about__content__image col">
                <img src="<?php echo $about_image["url"]; ?>" alt="" />
            </div>
        </div>
    </div>

    <!-- Testimonial Carousel -->
    <?php if (have_rows("testimonial")):
      while (have_rows("testimonial")):
        the_row();
        $testimonial_heading = get_sub_field("testimonial_heading");
        $testimonial_content = get_sub_field("testimonial_content");
      endwhile;
    endif; ?>

    <div class="testimonial__carousel">
        <h2><?php echo $testimonial_heading; ?></h2>
        <!-- Slider main container -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
            </div>
          </div>

          <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
          
        <div class="swiper-pagination"></div>
        </div>

        

    </div>

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
                      <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text"><?php the_title() ;?></p>
                        <a href="<?php the_field( 'my_articles' ); ?>" target="_blank" class="btn btn-primary">Read More</a>
                      </div>
                    </div>
                <?php endforeach; ?>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
        </div>
    <?php endif; ?>


    <div class="article__carousel">
        <h2><?php echo $testimonial_heading; ?></h2>
                         
        <!-- Slider main container -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
          </div>
        
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          
          <div class="swiper-pagination"></div>
        </div>
    </div>

    
    <!-- Event Carousel -->
    <div class="event__carousel">
        <h2><?php echo $testimonial_heading; ?></h2>
                         
        <!-- Slider main container -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
            </div>

            <div class="swiper-slide">
              <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg?ezimgfmt=rs:960x639/rscb1/ng:webp/ngcb1" class="card-img-top" alt="...">
            </div>
            
          </div>
        
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          
          <div class="swiper-pagination"></div>
        </div>
    </div>


    <!-- Gallery -->
    <div class="gallery">
        Gallery Loadmore
        <a href="#" id="loadMore">Load More</a>
    </div>

    <!-- test Load More -->
   <div class="gallery">
    <h1 class="heading">This Is New Heading</h1>
    <div class="box-gallery">
      <div class="box">
        <div class="image">
          <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80" alt="" srcset="">
          <div class="content">
            <h3>title blog</h3>
            <p>lorem ipsum</p>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80" alt="" srcset="">
          <div class="content">
            <h3>title blog</h3>
            <p>lorem ipsum</p>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80" alt="" srcset="">
          <div class="content">
            <h3>title blog</h3>
            <p>lorem ipsum</p>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80" alt="" srcset="">
          <div class="content">
            <h3>title blog</h3>
            <p>lorem ipsum</p>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80" alt="" srcset="">
          <div class="content">
            <h3>title blog</h3>
            <p>lorem ipsum</p>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80" alt="" srcset="">
          <div class="content">
            <h3>title blog</h3>
            <p>lorem ipsum</p>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80" alt="" srcset="">
          <div class="content">
            <h3>title blog</h3>
            <p>lorem ipsum</p>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80" alt="" srcset="">
          <div class="content">
            <h3>title blog</h3>
            <p>lorem ipsum</p>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80" alt="" srcset="">
          <div class="content">
            <h3>title blog</h3>
            <p>lorem ipsum</p>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80" alt="" srcset="">
          <div class="content">
            <h3>title blog</h3>
            <p>lorem ipsum</p>
          </div>
        </div>
      </div>
    </div>
   </div>

   <button id="load-more">Load more</button>

<?php get_footer();
