<?php get_header(); ?>

<div class='woocommerce'>
      <?php
        if(have_posts()) {
            while(have_posts()) : the_post();
    ?>
    
    
    <?php the_title(); ?>
    <?php the_content(); ?>
    
    
    <?php endwhile; } ?>
        
</div>

<?php get_footer(); ?>