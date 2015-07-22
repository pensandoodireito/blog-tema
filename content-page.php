<article class="description-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <div class="row">
            <div class="col-sm-12">
                <h2 class="font-roboto red"><?php the_title(); ?></h2>
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
        <?php the_content(); ?>
        <?php get_template_part('share', 'links'); ?>
    </section>
</article>