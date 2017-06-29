<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="container-fluid site-header">

    <div class="container" style="justify-content: space-between;">
        <div class="row justify-content-between">
            <div class="col-2 header-logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/stacks-logo-yellow.png" alt=""></a>
            </div>
            <div class="col-10 text-right header-block" style="color: white;">
                nav and phone
            </div>
        </div>
    </div>

</header>

<main>
