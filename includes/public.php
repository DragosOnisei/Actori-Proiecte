<?php
// Include fișierul șablon pentru lista de proiecte
require_once plugin_dir_path(__FILE__) . '../templates/template.php';

// Funcție pentru a afișa proiectele unui actor în profilul său public
function actori_proiecte_display_projects_in_profile() {
    // Obține ID-ul utilizatorului curent
    $user_id = um_profile_id();

    // Obține proiectele utilizatorului curent folosind funcția din common.php
    $projects = actori_proiecte_get_actor_projects($user_id);

    // Afișează titlul secțiunii proiecte
    echo '<h2>Proiecte</h2>';

    // Afișează lista de proiecte folosind șablonul din template.php
    actori_proiecte_render_project_list($projects);
}

// Adaugă acțiunea pentru a afișa proiectele în profilul public al actorului
add_action('um_profile_content_main', 'actori_proiecte_display_projects_in_profile', 1000);
