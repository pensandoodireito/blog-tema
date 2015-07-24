<?php
get_header(); ?>
<div class="container">
    <div class="row mb-md">
        <div class="col-md-12">
            <?php get_template_part('titleblog'); ?>
            <?php ?>
            <h2 class="red font-roboto">
                <?php
                if ( is_category() ) :
                    printf( 'Lista de posts na categoria "<mark class="red">%s</mark>"',  single_cat_title( '', false ) );
                elseif ( is_day() ) :
                    printf( 'Lista de posts publicados no dia "<mark class="red">%s</mark>"', get_the_date('d/m/Y') );

                elseif ( is_month() ) :
                    printf( 'Lista de posts publicados no mês "<mark class="red">%s</mark>"', get_the_date( 'F \d\e Y' ) );

                elseif ( is_year() ) :
                    printf( 'Lista de posts publicados no ano de "<mark class="red">%s</mark>"', get_the_date( 'Y' ) );

                else :
                    printf( 'Posts' );

                endif;
                ?>
            </h2>
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