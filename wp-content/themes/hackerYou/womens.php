<?php get_header(); ?>
<?php /* Template Name: womens */ ?>


<div class="gridWrapper clearfix">
      <header class="header">
        <div class="band wwBand">
         <!--  <h2><?php the_title(); ?></h2> -->
          <h2><?php the_field('sales_header'); ?></h2>
        </div>
        <!-- .band end -->
      </header>
<?php

$productGalleryQuery = new WP_Query(
  array(
    'posts_per_page' => -1,
    'post_type' => 'product_gallery',
    'order' => 'ASC'
    )
); ?>
    

<?php if ( $productGalleryQuery->have_posts() ) : ?>

  <?php while ($productGalleryQuery->have_posts()) : 
  $productGalleryQuery->the_post(); 
  $image = get_field('product_gallery_image');
  ?>


  <div class="productContainer">
    <a href="/wp-smithAndCo/sale/">
       <img class="productImage" src="<?php echo $image['url']?>" alt="">
      <h4><?php the_field('product_gallery_title'); ?></h4>
      <p> <?php the_field('product_gallery_price'); ?></p>
    </a>
  </div>


      <!-- header end -->
    <!--   <?php the_field('product_gallery_title'); ?>
      <?php the_field('product_gallery_price'); ?>

      <img class="productImage" src="<?php echo $image['url']?>" alt=""> -->
  


  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else:  ?>
  [stuff that happens if there aren't any posts]
<?php endif; ?>

</div>

<?php get_footer(); ?>
 