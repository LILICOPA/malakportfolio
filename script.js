document.addEventListener("DOMContentLoaded", function() {
    const toggleButton = document.getElementById("toggle-dark-mode");
    const body = document.body;

    // Vérifier si le mode sombre est activé dans le stockage local
    if (localStorage.getItem("dark-mode") === "enabled") {
        body.classList.add("dark-mode");
    }
        // Activer/désactiver le mode sombre et enregistrer l'état
        toggleButton.addEventListener("click", function() {
            body.classList.toggle("dark-mode");
            if (body.classList.contains("dark-mode")) {
                localStorage.setItem("dark-mode", "enabled");
            } else {
                localStorage.setItem("dark-mode", "disabled");
            }
        });
        // Gérer le formulaire de contact
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault();
        document.getElementById("confirmation-message").style.display = "block";
    });
});
function toggleAlbum() {
    var album = document.getElementById("album");
    album.classList.toggle("hidden");
}

function openLightbox(img) {
    var lightbox = document.createElement("div");
    lightbox.className = "lightbox";
    lightbox.onclick = function() {
        document.body.removeChild(lightbox);
    };

    var imgElement = document.createElement("img");
    imgElement.src = img.src;
    lightbox.appendChild(imgElement);

    document.body.appendChild(lightbox);
}
