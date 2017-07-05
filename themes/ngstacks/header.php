<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="container-fluid site-header" id="siteHeader">

    <div class="container d-flex" style="justify-content: space-between;">
        <div class="header-logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/stacks-logo-yellow.png" alt=""></a>
        </div>
        <div class="header-block">
            <div class="header-phone pt-3">
                <a href="tel:8888329443">888-832-9443</a>
            </div>
            <!-- <div class="header-nav-container"> -->
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
                </nav><!-- #site-navigation -->
                <!--             <nav class="header-nav mb-2">
                    <ul class="nav">
                        <li class="nav-item"><a href="#" class="nav-link">Products</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Customer Service Center</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Resources &amp; Support</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Company Information</a></li>
                        <li class="nav-item"><a href="#" class="nav-link btn nav-search-icon"><i class="fa fa-search"></i></a></li>
                    </ul>
                </nav> -->
            <!-- </div> -->
        </div>
    </div>

</header>

<main>
