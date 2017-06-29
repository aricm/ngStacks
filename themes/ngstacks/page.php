<?php
    get_header();
?>
<div class="container">
    <div class="row">
        <div class="col col-3">
            sidebar nav
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
