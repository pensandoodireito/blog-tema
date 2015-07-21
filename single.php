<?php
get_header(); ?>
<div class="container">
    
    <!-- <div class="row">
        <? //php get_template_part('menu', 'horizontal'); ?>
    </div> -->
    <header class="intercambio-archive">
        <div class="bck-header-intercambio" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/intercambio-header.jpg);"></div>
        <h3 class="titulo-header font-roboto white">Programa de intercâmbio SAL/MJ</h3>
    </header>
    <?php
    // Start the Loop.
    while (have_posts()) : the_post();
    // Include the page content template.
    get_template_part('content', 'single');
    comments_template();
    endwhile;
    ?>
    <?php get_sidebar(); ?>
</div>
<?php
get_footer();