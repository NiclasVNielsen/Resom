<?php 
    get_header();
?>
<div class="pageHeading cyanTheme">
    <div class="wrapper container">
        <figure class="col2 push1">
            <img class="undervisereHeading" src="<?php echo get_bloginfo('template_url') ?>/assets/undervisere.svg">
        </figure>
        <h1 class="col8 push1">
            Undervisere
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
        <?php the_field("text_box_1")?>
    </div>
</section>
<section class="containerAlignCenter whiteTheme centerTitle gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div>
        <img src="<?php the_field("billede1"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("text_box_2")?>
    </div>
</section>
<section class="gutterBoth grayTheme infoBox">
    <div class="m-space wrapper">
        <?php the_field("text_box_3")?>
    </div>
</section>
    
<?php 
    get_footer();
?>