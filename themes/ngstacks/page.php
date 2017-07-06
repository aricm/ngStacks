<?php
    get_header();
?>
<div class="container">
    <div class="row">
        <div class="col col-lg-3 hidden-md-down">
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

            <?php dynamic_sidebar( 'page_sidebar_1' ); ?>

        </div>
        <div class="col col-lg-9 col-md-12 post-content">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // End of the loop. ?>
        </div>
    </div>
</div>

<?php
    get_footer();
