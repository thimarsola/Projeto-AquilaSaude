<?php

//REGISTER CSS
function loadCSS()
{
    if(is_home()){
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css', [], '1.0.0', 'all');
    }elseif (is_page() && !is_page('Contato') && !is_page('Profissionais')){
	    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style-page.min.css', [], '1.0.0', 'all');
    }elseif (is_page('Contato')){
	    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style-contact.min.css', [], '1.0.0', 'all');
    }elseif (is_page('Profissionais')){
	    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style-team.min.css', [], '1.0.0', 'all');
    }
}

add_action('wp_enqueue_scripts', 'loadCSS');