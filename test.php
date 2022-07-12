<?php
$posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
foreach ($posts as $post) : start_wp(); ?>
<?php the_date(); echo "<br />"; ?>
<?php the_title(); ?>    
<?php the_post_thumbnail(); ?> 
<?php
endforeach;
?>

<?php
$query = new WP_Query( array( 'post_type' => 'article' ) );
while($query->have_posts()):
    $query->the_post();
    echo $query->ID; // it will print the ID of post
    get_the_post_thumbnail( $post_id );  // it will print the featured image of post
    the_title(); // it will print the title of post
    the_content(); // it will print the content of post
    the_post_thumbnail(); // it will print the featured image of post
endwhile;

?>

<?php
    $featured_posts = get_field('article');
    if( $featured_posts ): ?>
        <ul>
        <?php foreach( $featured_posts as $post ): 

            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span>A custom field from this post: <?php the_field( 'field_name' ); ?></span>
            </li>
        <?php endforeach; ?>
        </ul>
        <?php 
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?>


    <?php if (have_rows("my_articles")):
      while (have_rows("my_articles")):
        the_row();
        $my_articles_link = get_sub_field("my_articles_link");
        $my_articles_image = get_sub_field("my_articles_image");
      endwhile;
    endif; ?>


<!-- content carousel -->
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
          
        <div class="swiper-pagination"></div>
        </div>

        

    </div>