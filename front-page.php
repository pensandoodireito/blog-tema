<?php get_header(); ?>
<div class="intercambio-main">
    <header class="intercambio-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="red font-roboto">Programa de intercâmbio SAL/MJ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="intercambio-logo">
                        <?php
                            $blog_settings =  get_option('participacao_settings');
                        ?>
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

                    <article>
                        <header>
                            <div class="row">
                                <div class="col-sm-2 text-right">
                                    <h3 class="red font-roboto h1 mt-0"><?php the_date('d'); ?></h3>
                                    <p class="red font-roboto"><strong>abril/2014</strong></p>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="font-roboto"><strong><a href="<?php the_permalink(); ?>" class="red"><?php the_title(); ?></a></strong></h4>
                                    <p><small>Publicado por: <?php the_author(); ?></small></p>
                                </div>
                            </div>
                        </header>
                        <section>
                            <?php if (has_post_thumbnail()): ?>
                                <figure>
                                    <?php the_post_thumbnail('full', array( 'class' => 'img-full' ) ); ?>
                                </figure>
                            <?php endif; ?>
                        </section>
                        <section class="mt-md">
                            <?php the_excerpt(); ?>
                            <div class="row">
                                <div class="col-sm-8">
                                    <span class="label label-default">categoria A</span> <span class="label label-default">categoria B</span>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <p><small><i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>" alt="comentários"><?php comments_number( 'nenhum comentário', 'um comentário', '% comentários' ); ?></a></small></p>
                                </div>
                            </div>
                            <div class="row divider-top">
                                <div class="col-xs-12 text-right">
                                    <a href="#" class="btn btn-default btn-sm"><i class="fa fa-share-alt"></i> compartilhe</a>
                                </div>
                            </div>
                        </section>
                    </article>

                    <?php endwhile; ?>

                    <div class="row divider-top mt-lg mb-lg text-center">
                        <div class="col-xs-12">
                            <a href="#" class="btn btn-danger"><i class="fa fa-plus"></i> Mais postagens</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>