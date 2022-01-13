<?php get_header(); ?>

<style>
    header{
        margin-bottom: 10vh;
    }
    .woocommerce{
        text-align: center;
        color: #405D64;
    }
    .woocommerce > div{
        text-align: left;
    }
</style>

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