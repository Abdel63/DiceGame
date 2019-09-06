<?php

function DiceGame_register_assets()
{
    // Déclarer jQuery
    wp_deregister_script('jquery'); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
        false,
        null,
        true
    );

    // Déclarer le JS
    wp_enqueue_script(
        'DiceGame',
        plugin_dir_url(
            __FILE__
        ) . '/script.js',
        array('jquery'),
        null,
        true
    );


    wp_enqueue_style(
        'tailwind',
        "https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css",
        array(),
        null
    );
}


add_action('wp_enqueue_scripts', 'DiceGame_register_assets');
