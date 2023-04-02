<?php
/**
 * Plugin Name: Actori Proiecte
 * Description: Un plugin pentru a adăuga actori la diferite proiecte.
 * Version: 1.0
 * Author: Dragos Onisei
 * License: GPL2
 */

// Include fișierele auxiliare
require_once plugin_dir_path(__FILE__) . 'includes/admin.php';
require_once plugin_dir_path(__FILE__) . 'includes/public.php';
require_once plugin_dir_path(__FILE__) . 'includes/common.php';

// Încorporează fișierul CSS în site-ul WordPress
function actori_proiecte_enqueue_styles() {
    wp_enqueue_style(
        'actori-proiecte-style',
        plugins_url('css/actori-proiecte.css', __FILE__),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'actori_proiecte_enqueue_styles');

// Încorporează fișierul JavaScript în site-ul WordPress
function actori_proiecte_enqueue_scripts() {
    wp_enqueue_script(
        'actori-proiecte-script',
        plugins_url('js/actori-proiecte.js', __FILE__),
        array('jquery'),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'actori_proiecte_enqueue_scripts');


// Funcția AJAX care adaugă un utilizator la un proiect
function add_user_to_project() {
    $user_id = isset($_POST['user_id']) ? intval($_POST['user_id']) : 0;
    $project_id = isset($_POST['project_id']) ? intval($_POST['project_id']) : 0;

    if ($user_id > 0 && $project_id > 0) {
        // Logica pentru a adăuga utilizatorul la proiect
        // (de exemplu, adăugați un ID de proiect într-un câmp meta al utilizatorului)
        update_user_meta($user_id, 'proiect', $project_id);

        wp_send_json_success();
    } else {
        wp_send_json_error();
    }
}
add_action('wp_ajax_add_user_to_project', 'add_user_to_project');
add_action('wp_ajax_nopriv_add_user_to_project', 'add_user_to_project');
