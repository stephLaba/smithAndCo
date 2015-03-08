<?php get_header(); ?>
<?php
/*
Template Name: contact
*/
?>


    <div class="gridWrapper clearfix">

    <?php  
      $contactArgs = array('post_type' => 'contact');
      $contactQuery = new WP_Query($contactArgs);
      if($contactQuery->have_posts()) while($contactQuery->have_posts()) :
      $contactQuery->the_post();
      // $image = get_field('product_gallery_thumbnail');
    ?>

    <div class="block singleCol tall">
      <div class="block short full">
        <div class="blockContent">
          <div class="bioTag"> 
            <h6>
              hours
            </h6>
            <p>
              <?php the_field('hours_days'); ?>
              <br>
              <?php the_field('hours_time'); ?>
            </p>
            <h6>
              Phone
            </h6>
            <p>
             <?php the_field('phone_number'); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="block short full backgroundFour hide">
           <div class="blockContent">
             <!-- <h5 class="center">img</h5> -->
           </div>
         </div>
    </div>

    <div class="block doubleCol tall">
      <div class="blockContent form">

        <!-- <h2 class="center">
          form
        </h2> -->
        <h3>contact</h3>
        
        <div class="inputWrap">
          <label for="form02">Name</label>
          <input type="text" name="form02">
        </div>
        <div class="inputWrap02">
          <label for="form01">Email</label>
          <input type="text" name="form01">
        </div>
        <div class="textWrap">
        <h5>text</h5>
          <!-- <label for="form01">Text</label> -->
          <textarea name="bio" cols="40" rows="5"></textarea>
        </div>

        
        <a class="contactButton" href="#">submit</a>
      </div>
    </div>

    <div class="block doubleCol short fernBkg backgroundOne">
      <div class="blockContent">
      </div>
    </div>

    <div class="block singleCol short backgroundThree">
      <div class="blockContent">
      </div>
    </div>

    <div class="block singleCol short">
      <a href="/wp-smithAndCo/womens/" class="gridLink a3 b5">
        <div class="blockContent">
          <h5 class="center">
            Info
          </h5>
        </div>
      </a>
    </div>


    <div class="block doubleCol short d1">
      <div class="blockContent ">
      <h2 class="center">
      <?php the_field('address'); ?>
      </h2>
      </div>
    </div>




    <div class="block doubleCol hide short">
      <div class="blockContent">
    <!--  <h2 class="center">map</h2> -->
      <div  id="map"></div>
      </div>
    </div>

      <div class="block singleCol short hide backgroundFive yay">
      <div class="blockContent">
      <!--  <h4 class="center">
          img
        </h4> -->
      </div>  
    </div>
    </div>
    <!-- end .wrapper -->
   <?php endwhile; ?>

<!-- </div> --> <!-- /.main -->

<?php get_footer(); ?>