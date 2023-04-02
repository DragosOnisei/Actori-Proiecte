<?php
// Funcție pentru a adăuga o pagină de setări în panoul de administrare
function actori_proiecte_add_settings_page() {
    add_options_page(
        'Setări Actori Proiecte',
        'Actori Proiecte',
        'manage_options',
        'actori-proiecte',
        'actori_proiecte_render_settings_page'
    );
}

// Funcție pentru a afișa conținutul paginii de setări
function actori_proiecte_render_settings_page() {
    // Afișează conținutul paginii de setări (de exemplu, formulare pentru configurarea pluginului)
    echo '<h1>Setări Actori Proiecte</h1>';
    echo '<p>Aici puteți configura pluginul "Actori Proiecte".</p>';
}

// Adaugă acțiunea pentru a adăuga pagina de setări în meniul de administrare
add_action('admin_menu', 'actori_proiecte_add_settings_page');
