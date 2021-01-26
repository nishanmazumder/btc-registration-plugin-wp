<?php
//Script
add_action('wp_enqueue_scripts', 'nm_script');

//Ajax localize
add_action('wp_ajax_btc_reg_form', 'btc_reg_form');
add_action('wp_ajax_nopriv_btc_reg_form', 'btc_reg_form');

function nm_script()
{
    wp_enqueue_style('nmBootcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('nmFontawsomecss', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');
    wp_enqueue_style('nmBtcRegCss', plugins_url('css/style.css', __FILE__));

    wp_enqueue_script('nmBootjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array('jquery'));
    wp_enqueue_script('nmJqValidator', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js', array('jquery'));
    wp_enqueue_script('nmJqValCustom', plugins_url('js/nmvalidation.js', __FILE__), array('jquery'));
    wp_enqueue_script('nmBtcCustom', plugins_url('js/custom.js', __FILE__), array('jquery'));

    wp_localize_script('nmBtcCustom', 'btc_obj', array('ajax_url' => admin_url('admin-ajax.php')));

}
