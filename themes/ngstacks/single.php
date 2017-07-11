<?php
    get_header();
?>
<div class="container">
    <div class="row">
        <div class="col col-lg-3 hidden-md-down">
            <div class="sidenav">
                <a class="btn btn-block btn-stacks" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><i class="fa fa-long-arrow-left"></i> Back to blog</a>

                <?php dynamic_sidebar( 'page_sidebar_1' ); ?>
            </div>


        </div>
        <div class="col col-lg-9 col-md-12 blog-post-content">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // End of the loop. ?>
        </div>
    </div>
</div>

<?php
    get_footer();
