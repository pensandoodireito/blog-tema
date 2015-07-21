<?php

add_action( 'admin_init', 'blog_settings_init' );

/**
 * Inicia os campos das opções do tema
 */
function blog_settings_init()
{

    add_settings_field(
        'participacao_blogpadrao_fundo',
        'Padrão de fundo do blog',
        'participacao_blogpadrao_fundo_render',
        'pluginPage',
        'participacao_pluginPage_section'
    );
}

/**
 * Render do campo para logo
 */
function participacao_blogpadrao_fundo_render(  ) {

    $options = get_option( 'participacao_settings' );
    ?>
    <input type="hidden" id="padrao_url" name="participacao_settings[padrao]" value="<?php echo esc_url( $options['padrao'] ); ?>" />
    <input id="upload_padrao_button" type="button" class="button" value="Escolher/trocar uma imagem" />
<?php

}

/**
 * Render da previsualização da logo
 */
function participacao_blogpadrao_fundo_preview_render() {
    $options = get_option( 'participacao_settings' );  ?>
    <div id="upload_logo_preview" style="min-height: 100px;">
        <img style="max-width:100%; <?php echo (!isset($options['padrao']) ? "display: none;" : ""); ?>"  src="<?php echo esc_url( $options['padrao'] ); ?>" />
    </div>
<?php
}

add_action( 'widgets_init', 'blog_widgets_init' );
function blog_widgets_init() {
    register_sidebar( array(
        'name' => 'Barra lateral',
        'id' => 'barra-lateral',
        'description' => 'Todos os itens presentes na barra lateral',
        'before_widget' => '<div id="%1$s" class="widget %2$s panel panel-default">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="panel-heading"><h4 class="red font-roboto">',
        'after_title'   => '</h2></div>',
    ) );
}
