<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/lku6ell.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Resom</title>
	<?php wp_head(); ?>
</head>
<body>
    <header class="cyanTheme containerJustifySpaceBetween">
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
            <a class="idkAnymore" href="/min-konto">Min Konto</a>
        </div>
        <div class="burger disapear m-appear">
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/menu.png" alt="Menu">
        </div>
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