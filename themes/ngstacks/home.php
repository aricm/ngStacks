<?php
    get_header();
?>
<div class="container">
    <div class="row">
        <div class="col col-3">
            <h3 class="sidenav-title">
                Resources &amp; Support
            </h3>

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
        <div class="col col-9 post-content">

            <div class="embed-responsive embed-responsive-16by9 mb-5">
                <iframe class="embed-responsive-item" src="//player.vimeo.com/video/208251079?title=1&amp;byline=1&amp;portrait=0&amp;autoplay=0" allowfullscreen="allowfullscreen"></iframe>
            </div>

            <?php while ( have_posts() ) : the_post(); ?>
                <article class="mb-4 pb-4" style="border-bottom: 2px solid #fddd00">

                    <h2 class="post-title">
                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <em><?php the_excerpt(); ?></em>

                    <div style="font-weight: bold;font-style:italic;">Continue reading <a href="<?php the_permalink(); ?>">here...</a></div>

                </article>
            <?php endwhile; // End of the loop. ?>
        </div>
    </div>
</div>

<?php
    get_footer();
