<?php
    get_header();
?>
<div class="container">
    <div class="row">
        <div class="col col-3">
            <nav id="sidebar-navigation" class="sidebar-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </nav>
        </div>
        <div class="col col-9 post-content">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // End of the loop. ?>
        </div>
    </div>
</div>

<?php
    get_footer();
