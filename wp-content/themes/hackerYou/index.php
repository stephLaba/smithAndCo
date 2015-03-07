<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>


	<!-- header end -->

	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	   


	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>