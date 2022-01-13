<?php 
    get_header();
?>
<div class="pageHeading cyanTheme">
    <div class="wrapper container">
        <figure class="col2 push1">
            <img class="phoneHeading" src="<?php echo get_bloginfo('template_url') ?>/assets/phone.png">
        </figure>
        <h1 class="col8 push1">
            Læringsfilm
        </h1>
    </div>
</div>
<section data-aos="fade-right" class="containerAlignCenter whiteTheme centerTitle gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div>
        <img src="<?php the_field("billede1"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("vores_laeringsunivers")?>
    </div>
</section> 
<section data-aos="fade-left" class="containerAlignCenter whiteTheme centerTitle gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div class="PH">
        <img src="<?php the_field("billede2"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("fordele_efter_uddannelsen")?>
    </div>
</section>
<section data-aos="fade-right" class="containerAlignCenter whiteTheme centerTitle gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div>
        <img src="<?php the_field("billede3"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("text_box_3")?>
    </div>
</section> 
<section data-aos="fade-left" class="containerAlignCenter whiteTheme centerTitle gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div class="PH">
        <img src="<?php the_field("billede4"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("text_box_4")?>
    </div>
</section>
<section data-aos="fade-up" class="containerAlignCenter whiteTheme gutterBoth bodyText wrapper">
    <div style="margin: 84px auto 0 auto;">
        <h3 style="text-align: center;">Se mere af hvad vi tilbyder</h3>
      
        <p style="text-align: center;">Læs mere om vores kurser, for at få et dybere indblik i vores undervisning.</p>
      
        <div class="CTASmall" style="margin: 38px auto 0 auto;">
            <a class="idkAnymore" href="/kurser">Kurser</a>
        </div>
    </div>
</section> 
    
<?php 
    get_footer();
?>