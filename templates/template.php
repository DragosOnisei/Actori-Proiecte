<?php
// $projects este un array cu informații despre proiectele în care actorul este implicat
function actori_proiecte_render_project_list($projects) {
    // Verifică dacă există proiecte
    if (empty($projects)) {
        echo '<p>Nu sunt proiecte disponibile.</p>';
        return;
    }

    // Afișează lista de proiecte
    echo '<ul class="actori-proiecte-lista">';
    foreach ($projects as $project) {
        echo '<li>';
        echo '<h3>' . esc_html($project['nume']) . '</h3>';
        echo '<p>' . esc_html($project['descriere']) . '</p>';
        echo '</li>';
    }
    echo '</ul>';
}
