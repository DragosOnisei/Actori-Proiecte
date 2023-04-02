// Învelișul jQuery pentru a se asigura că $ se referă la jQuery și că codul este executat după ce documentul este încărcat
(function ($) {
    $(document).ready(function () {
        // Găsește toate elementele cu clasa "add-to-project" și le atribuie un handler de click
        $(".add-to-project").on("click", function () {
            // Extrage ID-ul utilizatorului și ID-ul proiectului din atributul "data" al elementului HTML
            var userId = $(this).data("user-id");
            var projectId = $(this).data("project-id");

            // Efectuează o cerere AJAX către server pentru a adăuga utilizatorul la proiect
            $.ajax({
                url: "/wp-admin/admin-ajax.php",
                type: "POST",
                data: {
                    action: "add_user_to_project",
                    user_id: userId,
                    project_id: projectId
                },
                success: function (response) {
                    // Verifică dacă răspunsul este marcat ca "success" și afișează un mesaj corespunzător
                    if (response.success) {
                        alert("Utilizatorul a fost adăugat la proiect.");
                    } else {
                        alert("A apărut o eroare la adăugarea utilizatorului la proiect.");
                    }
                },
                error: function () {
                    // Afișează un mesaj de eroare în cazul în care cererea AJAX nu a putut fi finalizată
                    alert("A apărut o eroare la adăugarea utilizatorului la proiect.");
                }
            });
        });
    });
})(jQuery);
