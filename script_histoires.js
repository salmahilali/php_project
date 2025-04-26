// Animation de texte ou de changement de couleur sur les clics
document.addEventListener("DOMContentLoaded", function() {
    const content = document.querySelector(".content");

    content.addEventListener("click", () => {
        content.style.backgroundColor = "#fff0f5";
        setTimeout(() => {
            content.style.backgroundColor = "#f0f8ff";
        }, 300);
    });
});