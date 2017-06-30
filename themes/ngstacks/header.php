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
        <div class="row">
            <div class="header-logo" style="padding: 17px 0;">
                <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/stacks-logo-yellow.png" alt=""></a>
            </div>
            <div class="header-block" style="color: white;flex-grow: 1;display: flex;flex-direction: column;">
                <div class="phone pt-3" style="flex-grow: 1;align-self: flex-end;">
                    <a href="tel:8888329443" style="font-size: 28px;color: #FDDD00;text-decoration: none;">888-832-9443</a>
                </div>
                <nav class="mb-2" style="align-self: flex-end;">
                    <ul class="nav">
                        <li class="nav-item"><a href="#" class="nav-link" style="color: white;font-weight: bold;">Products</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" style="color: white;font-weight: bold;">Customer Service Center</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" style="color: white;font-weight: bold;">Resources &amp; Support</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" style="color: white;font-weight: bold;">Company Information</a></li>
                        <li class="nav-item"><a href="#" class="nav-link btn" style="background-color: #FDDD00;color: #262729;border-radius: 5%;font-weight: bold"><span class="" ><i class="fa fa-search"></i></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>

<main>
