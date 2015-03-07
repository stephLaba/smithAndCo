<?php get_header(); ?>
<!-- <div class="main">
  <div class="container"> -->

    <div class="gridWrapper">
      <header class="header">
              <div class="band">
                <h2 class="bandH2 center">Sale</h2>
              </div>
              <!-- .band end -->
      </header>
           <!--  header end -->
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

         <?php 
          // <!-- we create an array of options in our post thumbnail -->
            $attr = array(
              'class' => 'hackerYou',
              'data-large' => 'dog.jpg',
              
            );
            the_post_thumbnail('large', $attr); ?> 

          <h1 class="entry-title"><?php the_title(); ?></h1>


          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div>
          <!-- .entry-content -->



      <?php endwhile; // end of the loop. ?>

  <!--   </div>  -->
    <!-- /.content -->

    <?php get_sidebar(); ?>
<!-- 
  </div> /.container -->
</div> <!-- .gridWrapper-->

<?php get_footer(); ?>