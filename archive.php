<?php
get_header(); ?>
<div class="container">
    <div class="row mb-md">
        <div class="col-md-12">
            <?php include('titleblog.php'); ?>
            <h2 class="red font-roboto">Lista de posts na categoria "<mark class="red"><?php echo  single_cat_title( '', false ); ?></mark>"</h2>
        </div>
    </div>
    <div class="row">
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