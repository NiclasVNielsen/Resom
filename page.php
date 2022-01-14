<?php get_header(); ?>

<section class='woocommerceContainer cyanTheme'>
  	<?php do_action( 'woocommerce_account_navigation' ); ?>
  	<div style="width: 100%">
      <?php
        if(have_posts()) {
            while(have_posts()) : the_post();
      ?>

      <?php the_content(); ?>


      <?php endwhile; } ?>
  	</div>
</section>

<?php get_footer(); ?>