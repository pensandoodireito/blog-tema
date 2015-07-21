<?php
get_header(); ?>
    <div class="container">
        <?php include('titleblog.php'); ?>
        <div class="row">
            <div class="col-md-8">
                <?php
                // Start the Loop.
                while (have_posts()) : the_post();
                    // Include the page content template.
                    get_template_part('content', 'single');
                endwhile;
                ?>
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php
get_footer();