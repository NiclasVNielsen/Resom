<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/lku6ell.css">
    <title>Resom</title>
	<?php wp_head(); ?>
</head>
<body>
    <header class="cyanTheme">
      	<section class="containerJustifySpaceBetween">
            <div class="logo m-col8">
                <a href="/">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/logo.svg" alt="Resom Logo">
                </a>
            </div>
            <nav class="containerJustifySpaceBetween m-disapear">
                <?php 
                    wp_nav_menu( array("theme_location" => "main-menu") );
                ?>
            </nav>
            <div class="login CTASmall m-disapear">
                <a class="idkAnymore" href="/wordpress/min-konto">Min Konto</a>
            </div>
            <div class="burger disapear m-appear">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/menu.png" alt="Menu">
            </div>
        </section>
    </header>
    <aside class="sideNav cyanTheme">
        <div class="sideNavHeader">
            <div class="burger">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/menu.png" alt="Menu">
            </div>
        </div>
        <nav class="gutterBoth">
            <?php 
                wp_nav_menu( array("theme_location" => "side-menu") );
            ?>
        </nav>
    </aside>