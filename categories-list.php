<?php
$categories = get_the_category( get_the_ID() );
if ( $categories ) {
	foreach ( $categories as $category ) { ?>
		<span class="label label-info">
            <a class="white" href="<?php echo get_category_link( $category->term_id ); ?>"
               title="<?php echo esc_attr( sprintf( __( "Veja todas as notícias em %s" ), $category->name ) ); ?>"><?php echo $category->cat_name; ?></a>
        </span>
		<?php
	}
}
