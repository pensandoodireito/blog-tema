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
                        <h1 class="logo">
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
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="red font-roboto">Sobre o programa de intercâmbio:</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Sed elementum vulputate nunc sed lobortis. </p>
                        <p>Curabitur ultrices fringilla nulla</p>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="edicoes">
                            <h4 class="red font-roboto">Mais edições</h4>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                                <li class="list-group-item"><a href="#">Dapibus ac facilisis in</a></li>
                                <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                                <li class="list-group-item"><a href="#">Porta ac consectetur ac</a></li>
                                <li class="list-group-item"><a href="#">Vestibulum at eros</a></li>
                            </ul>
                        </div>
                        <div class="editais divider-top">
                            <h4 class="red font-roboto">Editais</h4>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                                <li class="list-group-item"><a href="#">Dapibus ac facilisis in</a></li>
                                <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                                <li class="list-group-item"><a href="#">Porta ac consectetur ac</a></li>
                                <li class="list-group-item"><a href="#">Vestibulum at eros</a></li>
                            </ul>
                        </div>
                        <div class="categorias divider-top">
                            <h4 class="red font-roboto">Categorias</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Cras justo odio</a></li>
                                <li><a href="#">Dapibus ac facilisis in</a></li>
                                <li><a href="#">Morbi leo risus</a></li>
                                <li><a href="#">Porta ac consectetur ac</a></li>
                                <li><a href="#">Vestibulum at eros</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="red font-roboto">Promovido por:</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Sed elementum vulputate nunc sed lobortis. </p>
                        <p>Curabitur ultrices fringilla nulla</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>