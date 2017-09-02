<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> >
<head profile="http://gmpg.org/xfn/11">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#155b73" />

 	
<?php if (is_home()): ?>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@LaTaberna_Cun">
    <meta name="twitter:title" content="La Taberna de los Amigos">
    <meta name="twitter:description" content="Si de ver deporte en vivo se trata, la taberna es el mejor lugar para disfrutar de una variedad eventos deportivos relevantes.">
    <meta name="twitter:creator" content="@renovatiomex">

    <meta name="twitter:image" content="http://www.lataberna.com.mx/social.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="La Taberna de los Amigos" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.lataberna.com.mx/" />
    <meta property="og:image" content="http://www.lataberna.com.mx/social.png" />
    <meta property="og:description" content="Si de ver deporte en vivo se trata, la taberna es el mejor lugar para disfrutar de una variedad eventos deportivos relevantes." />
    <meta property="og:site_name" content="La Taberna de los Amigos" />
<?php endif ?>
<title>

</title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />


<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body>

 <!-- NAV -->
    <div class="nav-menu <?php if(is_page() && !is_front_page()){ ?>nav-solid <?php } ?>">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/src/logoT.png" alt="La taberna de los amigos"></a>
        <button class="hamburger hamburger--squeeze" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>  
    </div>
    <!-- NAV -->
    
    <!-- SIDENAV -->
    <div class="sidenav">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="#">
                <span>EVENTOS</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>#promocion-dia">
                <span>PROMOCIONES</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>#historia">
                <span>NUESTRA<br>HISTORIA</span>
                </a>
            </div>
        </div>
        <div class="clear-15">
            
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>#menu-comida">
                <span>MENÚ</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>noticias">
                <span>BLOG</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>#sucursales">
                <span>SUCURSALES</span>
                </a>
            </div>
        </div>
        <div class="clear-15"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>#bolsa-trabajo">
                    <span>
                        BOLSA DE TRABAJO
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- SIDENAV -->
    <div class="overlay-sidenav" >
        
    </div>
