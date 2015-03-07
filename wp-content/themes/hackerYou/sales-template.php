<?php //index.php is the last resort template, if no other templates match 
//Template Name: Sales

?>
<?php get_header(); ?>

<?php 
	$productArgs = array('post_type' => 'product');
	$productQuery = new WP_Query($productArgs);

	if($productQuery->have_posts()) while($productQuery->have_posts()) :
			$productQuery->the_post();
			$image = get_field('product_image');
			?>
			

		<div class="gridWrapper clearfix">
			<header class="header">
							<div class="band wwBand">
								<h2><?php the_field('product_header'); ?></h2>
							</div>
							<!-- .band end -->
						</header>
						<!-- header end -->
		<section class="productPage">
				<img class="productPageImage" src="<?php echo $image['url']?>" alt="">
					<div class="productInfo saleInfoDiv saleDiv">
					<h2><?php the_field('product_name'); ?></h2>
					<h4><?php the_field('product_price'); ?></h4>
					<h4><span class= "salePrice">Now: <?php the_field('product_sale_price'); ?></span></h4>
					<ul>
						<?php the_field('product_description'); ?>
					</ul>
					<h3 class="sizeHeader">size</h3>
					<select name="size">
						<option value="small">Small</option>
						<option value="medium">Medium</option>
						<option value="large">Large</option>
						
					</select>

					<a class="contactButton" href="">buy me</a>
				</div>
				<!-- .productInfo end -->

		<?php endwhile;  ?>
				<div class="saleOptionsDiv saleDiv clearfix">
					<h3>We Recommend</h3>

					<?php  
						$productArgs = array('post_type' => 'product_gallery', 'posts_per_page' => 4);
						$productQuery = new WP_Query($productArgs);
						if($productQuery->have_posts()) while($productQuery->have_posts()) :
						$productQuery->the_post();
						$image = get_field('product_gallery_thumbnail');
					?>


					<div class="saleOptImg saleOptImg01">
						<a href="/wp-smithAndCo/womens/">
							<img class="productImage" src="<?php echo $image['url']?>" alt="">
							<h6><?php the_field('product_gallery_title'); ?></h6>
							<h6 class="saleOptImgh6_02"><?php the_field('product_gallery_price'); ?></h6>
						</a>
					</div>
					<!-- end saleOptImg01 -->

					<?php endwhile; ?>
					

			

					<a href="port.html" class="seeMore">see more...</a>
				
				</div>

				<!-- saleImgDiv -->
		</section>
		<!-- .productPage end -->
		</div>
		<!-- .gridWrapper end  -->



<?php get_footer(); ?>