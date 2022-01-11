<?php 
    get_header();
?>
<div class="pageHeading cyanTheme">
    <div class="wrapper container">
        <figure class="col2 push1">
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/piggy.png">
        </figure>
        <h1 class="col8 push1">
            Finiansiering
        </h1>
    </div>
</div>
    
<section class="containerAlignCenter whiteTheme gutterRight bodyText wrapper bigSpace m-gutterBoth zigZagPattern">
    <div class="col7 imageContainer m-col8">
        <div class="PH">
            <img src="<?php the_field("billede2"); ?>" alt="">
        </div>
    </div>
    <div class="col5 m-col8 m-space">
        <?php the_field("finansielt_hjaelpe_til_uddannelsen")?>
    </div>
</section>

<a id="slUrl" href="https://www.sundhedplus.dk/sundhedplus-kredit/?c=S06864" target="_blank">
<img id="sp-slBtn" src="https://sl.sundhedplus.dk/sl.gif?v=sp1-1.0&c=S06864" style="width:320px;height:auto;" alt="Ansøg om en Sundhed+ Kredit"/>
</a>

<p> 
  Hos Resom Kosmetisk Uddannelse, tilbyder vi nu at du kan finansiere din uddannelse gennem Sundhed+.
  Med Sundhed+, kan du dele betalingen ud over 24 - 60 måneder, til en fast lav rente.
  Det er let og hurtigt og ansøge om en Sundhed+ Kredit - det tager blot et par minutter, og kræver blot NemID.
</p>

<?php 
    get_footer();
?>