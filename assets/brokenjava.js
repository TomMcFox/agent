/**
 * Wartet 3 Sekunden nach dem Laden der Seite und lädt dann das Login-Formular nach.
 */
document.addEventListener("DOMContentLoaded", function () {
    console.log("Seite geladen. Formular wird in 3 Sekunden nachgeladen...");

    setTimeout(function () {
        const placeholder = document.getElementById("screen-placeholder");

        if (placeholder) {
            fetch("login_form.php")
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Netzwerkantwort war nicht ok");
                    }
                    return response.text();
                })
                .then(data => {
                    placeholder.innerHTML = data;
                    console.log("Formular erfolgreich nachgeladen.");
                })
                .catch(error => {
                    placeholder.innerHTML = "<p>Fehler beim Laden des Formulars.</p>";
                    console.error("Fehler beim Nachladen:", error);
                });
        }
    }, 3000);
});
