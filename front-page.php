<?php get_header(); ?>
<div class="intercambio-main">
    <header class="intercambio-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="red font-roboto">
                        <a href="<?php echo home_url(); ?>" alt="<?php bloginfo('title'); ?>">
                        <?php bloginfo('title'); ?></a>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    $blog_settings =  get_option('participacao_settings');
                    ?>
                    <div class="intercambio-logo" style="background-image: url(<?php echo $blog_settings['padrao']; ?>);">

                        <a href="<?php echo home_url(); ?>" alt="<?php bloginfo('title'); ?>"><h1 class="logo" style="background-image: url(<?php echo $blog_settings['logo']; ?>);">
                        Programa de intercâmbio SAL/SAJ
                        </h1></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-lg">
        <div class="row">
            <div class="col-md-8">
                <div class="intercambio-content">

                    <?php while(have_posts()): the_post(); ?>

                    <?php get_template_part('content', 'archive'); ?>

                    <?php endwhile; ?>


                </div>
                <?php
                    if (get_query_var('paged') < $wp_query->max_num_pages && $wp_query->max_num_pages > 1) {
                        ?>
                        <div class="row divider-top mt-lg mb-lg text-center">
                            <div class="col-xs-12">
                                <a href="#" class="btn btn-danger" id="mais-noticias"
                                   onclick="return carregar_noticias('.intercambio-content');"><i class="fa fa-plus"></i> Mais
                                    postagens</a>
                            </div>
                        </div>
                    <?php
                    }
                ?>
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>