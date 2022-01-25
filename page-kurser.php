<?php 
    get_header();
?>
<div class="pageHeading cyanTheme">
    <div class="wrapper container">
        <figure class="col2 push1 m-disapear">
            <img class="nurseHeading" src="<?php echo get_bloginfo('template_url') ?>/assets/nurse.png">
        </figure>
        <h1 class="col8 push1 m-pushNone">
            Kurser
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
        <?php the_field("hold_opstart_og_ansogning")?>
    </div>
</section>
<section data-aos="fade-left" class="containerAlignCenter whiteTheme centerTitle gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div>
        <img src="<?php the_field("billede1"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("hold_opstart_og_ansogning")?>
    </div>
</section> 
<section data-aos="fade-up" class="containerJustifySpaceAround whiteTheme bodyText wrapper bigSpace">
    <div id="kurser" class="m-space col12">
        <?php the_field("uddannelsens_opbygning_og_tilmelding")?>
    </div>
    <div class="col12 containerJustifySpaceAround smallLittleSpace">
        <div class="productBox darkCyanTheme m-col8 m-gutterBoth">
            <?php the_field("modul_1")?>
        </div>
        <div class="productBox darkCyanTheme m-col8 m-gutterBoth">
            <?php the_field("modul_2")?>
        </div>
    </div>
</section>
<section data-aos="fade-up" class="containerAlignCenter whiteTheme gutterBoth wrapper">
    <div style="margin: 84px auto 0 auto;">
        <h3 style="text-align: center;">Brug for hjælp til finiansiering?</h3>
      
        <p style="text-align: center;">Med vores partnerskab med Sundhed+ kan du betale din uddannelse over 24-60 måneder.</p>
      
        <div class="CTASmall" style="margin: 38px auto 0 auto;">
            <a class="idkAnymore" href="/finansiering">Finansiering</a>
        </div>
    </div>
</section>
<section></section>
<section data-aos="fade-up" class="gutterBoth grayTheme infoBox">
    <div class="m-space wrapper">
        <?php the_field("betaling")?>
    </div>
</section>
<section data-aos="fade-left" class="containerAlignCenter whiteTheme gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div>
        <img src="<?php the_field("billede2"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("text_box_4")?>
      
        <div class="CTASmall" style="margin-top: 2em;">
            <a class="idkAnymore" href="/undervisere">Underviser</a>
        </div>
    </div>
</section> 
    
<?php 
    get_footer();
?>