<?php get_header(); ?>
<div class="conteudo intercambio-front">
    <div class="row">
        <section id="intercambio-banner-container" class="col-lg-12 text-center">
            <img src="<?php echo get_option('participacao_settings')['logo']; ?>" class="intercambio-banner"/>
        </section>
    </div>
    <div class="row">
        <div class="main-content col-md-9">
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 8,
            );
            $posts = new WP_Query($args);
            if ($posts->have_posts()) {
                while ($posts->have_posts()) : $posts->the_post();
                    echo '<div class="post">';
                        echo '<div class="post-header row">';
                            echo '<div class="post-header-img col-lg-4">';
                                echo get_the_post_thumbnail( $pagina->ID, 'post-thumbnail' , array('class'=>'img-adptive'));
                            echo '</div>';
                            echo '<div class="post-header-title col-lg-8">';
                                echo '<p class="title">';
                                    echo '<a href="' . get_post_permalink() . '">';
                                        echo the_title();
                                    echo '</a>';
                                echo '</p>';
                                echo '<p class="excerpt">';
                                    echo the_excerpt();
                                echo '</p>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                endwhile;
            }
        ?>
        </div>
        <div class="sidebar col-md-3">
        <?php //TODO Adicionar widgets
        ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
