jQuery(document).ready(function ($) {
    $('#upload_padrao_button').click(function () {
        tb_show('Upload do padrão do Blog', 'media-upload.php?referer=settings_page_blog-tema&type=image&TB_iframe=true&post_id=0', false);

        window.send_to_editor = function (html) {
            var image_url = $('img', html).attr('src');
            $('#padrao_url').val(image_url);
            tb_remove();

            $('#upload_padrao_preview img').attr('src', image_url);
            $('#upload_padrao_preview img').show();

            $('#submit_options_form').trigger('click');
        }

        return false;
    });
});