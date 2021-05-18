<?php

//REGISTER JS
function loadJS()
{
    if(is_home()){
        wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/script-home.min.js', [], '1.0.0', true);
    }elseif (is_page() && !is_page('Contato') && !is_page('Profissionais')){
	    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/script-page.min.js', [], '1.0.0', true);
    }elseif (is_page('Contato')){
	    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/script-contact.min.js', [], '1.0.0', true);
    }elseif (is_page('Profissionais')){
	    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/script-team.min.js', [], '1.0.0', true);
    }
}

add_action('wp_enqueue_scripts', 'loadJS');