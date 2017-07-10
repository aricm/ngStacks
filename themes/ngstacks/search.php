<?php
    get_header();
?>

<div class="container">
    <div class="row">
        <div class="col col-lg-3 hidden-md-down">
            <div class="sidenav">
                <?php dynamic_sidebar( 'page_sidebar_1' ); ?>
            </div>
        </div>

        <div class="col col-lg-9 col-md-12 post-content">
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
