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
                <a href="javascript:void(0);" class="hamburger"><i class="fa fa-bars"></i></a>
            </div>
            <div class="header-nav-container">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
                </nav><!-- #site-navigation -->

                <a href="javascript:void(0);" class="search-toggle"><i class="fa fa-search"></i></a>
            </div>
        </div>

        <div id="stickyFormWrap" class="sticky-form-wrap">
            <a id="stickyFormTrigger" href="javascript:void(0);">Estimate Request</a>
            <div id="stickyForm" class="sticky-form">
                <?php echo do_shortcode( '[contact-form-7 id="290" title="Sticky Contact Us" html_class="page-form"]' ); ?>
            </div>
        </div>

        <nav id="mobilenav" class="mobilenav" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
        </nav>
    </div>

</header>

<main>
