<?php get_header(); ?>
<?php
/*
Template Name: front
*/

?>






	<div class="gridWrapper clearfix">


	<?php  
	  $homepageArgs = array('post_type' => 'homepage');
	  $homepageQuery = new WP_Query($homepageArgs);
	  if($homepageQuery->have_posts()) while($homepageQuery->have_posts()) :
	  $homepageQuery->the_post();
	  $image = get_field('big_image');
	?>

		<header class="header">
			<div class="band">
			<h2><?php the_field('big_header'); ?></h2>
			</div>
			<!-- .band end -->
		</header>


		<div class="a1 block doubleCol short">
				<a href="/wp-smithAndCo/womens/" class="gridLink">
				<div class="blockContent inset">
					<h2 class="center"><?php the_field('cta_1'); ?></h2>
				</div>
				</a>
		</div>

		<div class="block doubleCol short">
			<div class="a2 blockContent">
				<a href="/wp-smithAndCo/womens/" class=" gridLink">
					<h2 class="center"><?php the_field('cta_2'); ?></h2>
				</a>
			</div>
		</div>
	
	<div class="block singleCol short backgroundThree yay hide">
		<div class="blockContent">
		</div>	
	</div>

	<div class="block singleCol tall">
		<div class="b1 block short full">
			<a href="" class="gridLink b1">
				<div class="blockContent">
					<h5 class="center">
						<?php the_field('social_1'); ?>
					</h5>
				</div>
			</a>
		</div>
		<div class="block short full hide">
			<a href="" class="gridLink backgroundFour">
			     <div class="blockContent">
			     </div>
			</a>
		   </div>
	</div>

	<div class="block doubleCol tall backgroundTwo  largeImage">
		<a href="/wp-smithAndCo/womens/" class="gridLink">
			<div class="blockContent">
				<h2 class="right buttonLink">
					<?php the_field('big_image_text'); ?>
				</h2>
			</div>
		</a>
	</div>

	<div class="block doubleCol short backgroundOne a1">
		<a href="/wp-smithAndCo/contact/" class="gridLink b3">
			<div class="blockContent">
				<h4 class="center">
					<?php the_field('cta_3'); ?>
				</h4>
			</div>
		</a>
	</div>

	<div class="block singleCol short">
		<a href="" class="gridLink a2 b4">
			<div class="blockContent">
				<h5 class="center">
					<?php the_field('social_2'); ?>
				</h5>
			</div>
		</a>
	</div>

	<div class="block singleCol short">
		<a href="" class="gridLink a3 b5">
			<div class="blockContent">
				<h5 class="center">
					<?php the_field('social_3'); ?>
				</h5>
			</div>
		</a>
	</div>

	
</div>

	 <?php endwhile; ?>
</div>
<!-- .wrapper End -->

<?php get_footer(); ?>