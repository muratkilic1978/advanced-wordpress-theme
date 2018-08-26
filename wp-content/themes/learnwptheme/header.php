<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Advanced WordPress Theme</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <p>This is a paragraph</p>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl10 col-md-8 col-sm-8 col-6">Social Icons</div>
                    <div class="search col-xl-2 col-md-4 col-sm-4 col-6 text-right">Search</div> 
                </div>
            </div>
            
        </section>
        <section class="menu-area">
            <section class="logo">Logo</section>
            <nav class="main-menu">Menu</nav>
        </section>
    </header>