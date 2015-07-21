<?php get_header(); ?>
<div class="intercambio-main">
    <header class="intercambio-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="red font-roboto"><?php bloginfo('title'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    $blog_settings =  get_option('participacao_settings');
                    ?>
                    <div class="intercambio-logo" style="background-image: url(<?php echo $blog_settings['padrao']; ?>);">

                        <h1 class="logo" style="background-image: url(<?php echo $blog_settings['logo']; ?>);">
                        Programa de intercâmbio SAL/SAJ
                        </h1>
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

                    <div class="row divider-top mt-lg mb-lg text-center">
                        <div class="col-xs-12">
                            <a href="#" class="btn btn-danger"><i class="fa fa-plus"></i> Mais postagens</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>