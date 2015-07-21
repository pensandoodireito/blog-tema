<?php
get_header(); ?>
<div class="container">
    <?php include('titleblog.php'); ?>
    <div class="row">
        <h2>Lista de posts na categoria "<?php echo  single_cat_title( '', false ); ?>"</h2>

        <?php
        // Show an optional term description.
        $term_description = term_description();
        if ( ! empty( $term_description ) ) :
            printf( '<div class="taxonomy-description">%s</div>', $term_description );
        endif;
        ?>
        <div class="col-md-8">
            <?php
            // Start the Loop.
            while (have_posts()) : the_post();
            // Include the page content template.
            get_template_part('content', 'archive');
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