<?php

add_action( 'admin_init', 'blog_settings_init' );

/**
 * Inicia os campos das opções do tema
 */
function blog_settings_init() {

	add_settings_field(
		'participacao_blogpadrao_fundo',
		'Padrão de fundo do blog',
		'blog_padrao_fundo_render',
		'pluginPage',
		'participacao_pluginPage_section'
	);

	add_settings_field(
		'participacao_blogpadrao_preview',
		'',
		'blog_padrao_fundo_preview_render',
		'pluginPage',
		'participacao_pluginPage_section'
	);
}

/**
 * Render do campo para logo
 */
function blog_padrao_fundo_render() {

	$options = get_option( 'participacao_settings' );
	?>
	<input type="hidden" id="padrao_url" name="participacao_settings[padrao]"
	       value="<?php echo esc_url( $options['padrao'] ); ?>"/>
	<input id="upload_padrao_button" type="button" class="button" value="Escolher/trocar uma imagem"/>
	<?php

}

/**
 * Render da previsualização da padrão
 */
function blog_padrao_fundo_preview_render() {
	$options = get_option( 'participacao_settings' ); ?>
	<div id="upload_padrao_preview" style="min-height: 100px;">
		<img style="max-width:100%; <?php echo( ! isset( $options['padrao'] ) ? "display: none;" : "" ); ?>"
		     src="<?php echo esc_url( $options['padrao'] ); ?>"/>
	</div>
	<?php
}

add_action( 'admin_enqueue_scripts', 'blog_options_enqueue_scripts' );
function blog_options_enqueue_scripts() {
	wp_register_script( 'blog-upload', get_stylesheet_directory_uri() . '/js/blog-upload.js', array(
		'jquery',
		'media-upload',
		'thickbox'
	) );

	if ( 'settings_page_participacao-tema' == get_current_screen()->id ) {
		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'thickbox' );
		wp_enqueue_style( 'thickbox' );

		wp_enqueue_script( 'media-upload' );
		wp_enqueue_script( 'blog-upload' );

	}

}

add_action( 'admin_init', 'blog_padrao_option_setup' );
function blog_padrao_option_setup() {
	global $pagenow;

	if ( 'media-upload.php' == $pagenow || 'async-upload.php' == $pagenow ) {
		add_filter( 'gettext', 'blog_padrao_change_text', 1, 3 );
	}
}

function blog_padrao_change_text( $translated_text, $text, $domain ) {
	if ( 'Insert into Post' == $text ) {
		$referer = strpos( wp_get_referer(), 'settings_page_blog-tema' );
		if ( $referer != '' ) {
			return 'Definir essa imagem como padrão do site';
		}
	}

	return $translated_text;
}

add_action( 'widgets_init', 'blog_widgets_init' );
function blog_widgets_init() {
	register_sidebar( array(
		'name'          => 'Barra lateral',
		'id'            => 'barra-lateral',
		'description'   => 'Todos os itens presentes na barra lateral',
		'before_widget' => '<div id="%1$s" class="widget %2$s panel panel-default">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="panel-heading"><h4 class="red font-roboto">',
		'after_title'   => '</h2></div>',
	) );
}
