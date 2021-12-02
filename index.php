<?php 
    get_header();
?>
            
<section class="cyanTheme s-whiteTheme m-gutterBoth">
    <div class="wrapper containerAlignCenter m-heightAuto s-flexReverse">
        <div class="col6 m-col8 hero">
            <?php the_field("bliv_kosmetisk_sygeplejerske")?>
            <a href="" class="CTABig m-box-center">
                Tilmeld
            </a>
        </div>
        <div class="col5 push1 m-disapear s-appear s-col4 s-pushNone">
            <img src="./assets/circle.png" alt="Circle of despair">
        </div>
    </div>
</section>
<section class="whiteTheme centerTitle wrapper littleSpace s-disapear">
    <h2>
        Kom godt igang
    </h2>
    <section class="containerJustifySpaceAround">
        <div class="banner col3">
            <div>
                
            </div>
            <h3 class="m-p-size">
                Kursuser
            </h3>
        </div>
        <div class="banner col3">
            <div>

            </div>
            <h3 class="m-p-size">
                Læringsfilm
            </h3>
        </div>
        <div class="banner col3">
            <div>

            </div>
            <h3 class="m-p-size">
                Finansiering
            </h3>
        </div>
        <div class="banner col3">
            <div>

            </div>
            <h3 class="m-p-size">
                Jobbank
            </h3>
        </div>
    </section>
</section>
<!-- Gutter needs ajusting to work probably -->
<section class="containerAlignCenter whiteTheme centerTitle gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div class="PH">

        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("om_uddannelsen")?>
    </div>
</section>
    
<?php 
    get_footer();
?>