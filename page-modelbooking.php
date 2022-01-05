<?php 
    get_header();
?>
<div class="pageHeading cyanTheme">
    <div class="wrapper container">
        <figure class="col2 push1">
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/model.png">
        </figure>
        <h1 class="col8 push1">
            Bliv Model
        </h1>
    </div>
</div>
<section class="containerAlignCenter whiteTheme centerTitle gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div>
        <img src="<?php the_field("billede1"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("vi_soger_modeller")?>
    </div>
</section>
    
<?php 
    get_footer();
?>