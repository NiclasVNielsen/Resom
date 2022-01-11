<?php 
    get_header();
?>
            
<section class="cyanTheme s-whiteTheme m-gutterBoth">
    <div class="wrapper containerAlignCenter m-heightAuto s-flexReverse">
        <div class="col6 m-col8 hero">
            <?php the_field("bliv_kosmetisk_sygeplejerske")?>
            <a href="/wordpress/kurser#kurser" class="CTABig m-box-center">
                Tilmeld
            </a>
        </div>
        <div class="col5 push1 m-disapear s-appear s-col4 s-pushNone">
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/circle.svg" alt="Circle of despair">
        </div>
    </div>
</section>
<section class="whiteTheme centerTitle wrapper littleSpace s-disapear">
    <h2>
        Kom godt igang
    </h2>
    <section class="containerJustifySpaceAround">
        <div class="banner col3">
            <a href="/kurser">
                <div>
                    <img class="nurseIllustration" src="<?php echo get_bloginfo('template_url') ?>/assets/nurse.png" alt="Kurser">
                </div>
                <h3 class="m-p-size">
                    Kurser
                </h3>
            </a>
        </div>
        <div class="banner col3">
            <a href="/laeringsfilm">
                <div>
                    <img class="phoneIllustration" src="<?php echo get_bloginfo('template_url') ?>/assets/phone.png" alt="Læringsfilm">
                </div>
                <h3 class="m-p-size">
                    Læringsfilm
                </h3>
            </a>
        </div>
        <div class="banner col3">
            <a href="/finansiering">
                <div>
                    <img class="piggyIllustration" src="<?php echo get_bloginfo('template_url') ?>/assets/piggy.png" alt="Finansiering">
                </div>
                <h3 class="m-p-size">
                    Finansiering
                </h3>
            </a>
        </div>
        <div class="banner col3">
            <a href="/job-bank">
                <div>
                    <img class="bankIllustration" src="<?php echo get_bloginfo('template_url') ?>/assets/bank.png" alt="Jobbank">
                </div>
                <h3 class="m-p-size">
                    Jobbank
                </h3>
            </a>
        </div>
    </section>
</section>
<!-- Gutter needs ajusting to work probably -->
<section class="containerAlignCenter whiteTheme centerTitle gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div>
            <img src="<?php the_field("billede1"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("om_uddannelsen")?>
    </div>
</section>
<section class="containerAlignCenter whiteTheme centerTitle gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div class="PH">
            <img src="<?php the_field("billede2"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("er_det_gratis")?>
    </div>
</section>
<section class="gutterBoth grayTheme infoBox">
    <div class="m-space wrapper">
        <?php the_field("cbit")?>
    </div>
</section>
<section class="containerAlignCenter whiteTheme gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div class="PH">
            <img src="<?php the_field("billede2"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("er_det_gratis")?>
    </div>
</section>
    
<?php 
    get_footer();
?>