
document.addEventListener("DOMContentLoaded", function () {

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
