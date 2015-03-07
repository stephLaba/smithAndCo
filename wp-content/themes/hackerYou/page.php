<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


        <?php the_content(); ?>

        <?php  
        $post_title = get_the_title();
        $post_title = strtoupper($post_title);
        ?>
       <h2>Post Title:<?php the_title(); ?></h2>
        <p><?php echo home_url(); ?></p>
        <p>The url for this page is: <?php echo get_permalink(); ?></p>
        <p>The url for my blogPost is: <?php echo get_permalink(12); ?></p>
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->.

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
    