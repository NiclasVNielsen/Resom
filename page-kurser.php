<?php 
    get_header();
?>

<section class="containerAlignCenter whiteTheme centerTitle gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div class="PH">
        <img src="<?php the_field("billede1"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("hold_opstart_og_ansogning")?>
    </div>
</section> 
<section class="containerJustifySpaceAround whiteTheme bodyText wrapper bigSpace">
    <div class="m-space col12">
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
<section class="gutterBoth grayTheme infoBox">
    <div class="m-space wrapper">
        <?php the_field("betaling")?>
    </div>
</section>
    
<?php 
    get_footer();
?>