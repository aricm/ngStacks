<?php
    get_header();
?>
<div class="container">
    <div class="row">
        <div class="col col-3">
            <nav id="sidenav" class="sidenav" role="navigation">

               <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
            </nav>

            <?php dynamic_sidebar( 'page_sidebar_1' ); ?>

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
