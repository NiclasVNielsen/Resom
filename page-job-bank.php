<?php 
    get_header();
?>
<div class="pageHeading cyanTheme">
    <div class="wrapper container">
        <figure class="col2 push1">
            <img class="bankHeading" src="<?php echo get_bloginfo('template_url') ?>/assets/bank.png">
        </figure>
        <h1 class="col8 push1">
            Jobbank
        </h1>
    </div>
</div>

<section class="gutterBoth grayTheme infoBox">
    <div class="m-space wrapper">
        <?php the_field("text_box_1")?>
    </div>
</section>

<?php 
    get_footer();
?>