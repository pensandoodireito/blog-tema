<?php
get_header(); ?>
<div class="container">
    <header class="intercambio-archive">
        <div class="bck-header-intercambio" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/intercambio-header.jpg);"></div>
        <h3 class="titulo-header font-roboto white">Programa de intercâmbio SAL/MJ</h3>
    </header>
    <div class="row">
        <div class="col-md-8">
            <?php
            // Start the Loop.
            while (have_posts()) : the_post();
            // Include the page content template.
            get_template_part('content', 'archive');
            endwhile;
            ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php
get_footer();