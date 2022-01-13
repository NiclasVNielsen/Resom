<?php get_header(); ?>
<style>
  body{
    color: #FFFFFF;
    background: #96B3BA;
  }

  .woocommerce{
    display: flex;
  }

  .wcmamtx_menu_left{
    width: 4em;
    height: 100vh;
    background: #405D64;
    overflow: hidden;
  }
</style>
<section class='woocommerceContainer'>
  <div class='woocommerce'>
        <?php
          if(have_posts()) {
              while(have_posts()) : the_post();
      ?>
      
      
      <?php the_title(); ?>
      <?php the_content(); ?>
      
      
      <?php endwhile; } ?>
          
  </div>
</section>

<?php get_footer(); ?>