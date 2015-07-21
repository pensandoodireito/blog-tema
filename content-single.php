<div class="row">
    <div class="col-md-8 text-left">
        <h2 class="red font-roboto"><?php the_title(); ?></h2>
        <p><?php the_date('d \d\e F \d\e Y'); ?>
            <span class="divider-left"><?php
                $categories = get_the_category(get_the_ID());
                $separator = ' | ';
                $output = '';
                if($categories){
                foreach($categories as $category) {
                $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "Veja todas as notícias em %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
                }
                echo trim($output, $separator);
                }
            ?></span>
        </p>
        <?php the_content(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>