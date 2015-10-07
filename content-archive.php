<article class="description-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <div class="row">
            <?php
            $formato_data = get_option('date_format');

            if ($formato_data != "") {
                $formato_separado = explode(' ', $formato_data);
                ?>
                <div class="col-sm-2 text-right">
                    <h3 class="red font-roboto h1 mt-0"><?php the_time($formato_separado[0]); ?></h3>
                    <p class="red font-roboto"><strong><?php the_time($formato_separado[1]); ?></strong></p>
                </div>
                <?php
            } ?>
            <div class="col-sm-9 divider-left">
                <h4 class="font-roboto"><strong><a href="<?php the_permalink(); ?>" class="red"><?php the_title(); ?></a></strong></h4>
                <p><small>Publicado por: <?php the_author(); ?></small></p>
            </div>
        </div>
    </header>
    <section class="mt-md">
        <div class="row">
            <div class="col-md-3">
                <?php if (has_post_thumbnail()): ?>
                <figure>
                    <?php the_post_thumbnail('thumbnail', array( 'class' => 'img-full' ) ); ?>
                </figure>
                
                <?php endif; ?>
            </div>
            <div class="col-md-9">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </section>
    <section class="mt-md">
        
        <div class="row">
            <div class="col-sm-8">
                <?php get_template_part('categories', 'list'); ?>
            </div>
            <div class="col-sm-4 text-right">
                <p><small><i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>" alt="comentários"><?php comments_number( 'nenhum comentário', 'um comentário', '% comentários' ); ?></a></small></p>
            </div>
        </div>
        <?php get_template_part('share', 'links'); ?>
        <?php comments_template(); ?>
    </section>
</article>