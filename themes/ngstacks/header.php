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
                <a href="javascript:void(0);" class="hamburger hidden-xl-up" id="mobnavTrigger"><i class="fa fa-bars"></i></a>
            </div>
            <div class="header-nav-container hidden-lg-down">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
                </nav><!-- #site-navigation -->

                <a href="javascript:void(0);" class="search-toggle" id="searchToggle"><i class="fa fa-search"></i></a>
            </div>
        </div>

        <div id="stickyFormWrap" class="sticky-form-wrap">
            <a id="stickyFormTrigger" href="javascript:void(0);">Estimate Request</a>
            <div id="stickyForm" class="sticky-form">
                <?php echo do_shortcode( '[contact-form-7 id="290" title="Sticky Contact Us" html_class="page-form"]' ); ?>
            </div>
        </div>

    </div>

    <div id="searchBar" class="search-bar" style="display: none;">
        <div class="container">
            <form action="/" method="get" class="form-inline">
                <input type="text" class="form-control" name="s" id="search" placeholder="SEARCH">
            </form>
        </div>
    </div>

    <div id="mobnav" class="mobnav hidden-xl-up">
        <?php dynamic_sidebar( 'page_sidebar_1' ); ?>

        <nav class="subnav" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
        </nav>
        <div id="xSubnav" class="xSubnav">
            <a href="javascript:void(0);"><i class="fa fa-times"></i> CLOSE</a>
        </div>
    </div>
</header>

<main>
