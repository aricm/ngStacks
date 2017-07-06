<?php
    get_header();
?>
<div class="container">
    <div class="row">
        <div class="col col-3">
            <?php

            // Get the title of the parent page to display above the nav
            if( is_page($post->ID) && $post->post_parent ) {
                $children = get_pages('child_of='.$post->post_parent);
            } else {
                $children = get_pages('child_of='.$post->ID);
            }

            ?>

            <?php if($children): ?>

                <h3 class="sidenav-title">
                    <?php
                    $parent_title = get_the_title($post->post_parent);
                    echo $parent_title;
                    ?>
                </h3>

            <?php endif;?>
            <nav id="sidenav" class="sidenav" role="navigation">

               <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
            </nav>

            <nav class="sidebar-btn-nav">
                <a href="http://stacks.dev:81/products/store/">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/filled-box.png" alt="">
                    Store
                </a>
                <a href="http://stacks.dev:81/products/store/">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/scanner.png" alt="">
                    Scan
                </a>
                <a href="http://stacks.dev:81/products/scan/">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/shred.png" alt="">
                    Shred
                </a>
                <a href="http://stacks.dev:81/products/shred/container-types/">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/filled-box.png" alt="">
                    Data Protection
                </a>
                <a href="http://stacks.dev:81/companyinfo/testimonials/">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/testimonials.png" alt="">
                    Testimonials
                </a>
            </nav>
        </div>
        <div class="col col-9 blog-post-content">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // End of the loop. ?>
        </div>
    </div>
</div>

<?php
    get_footer();
