// Script simple pour animations légères sur les éléments du menu
document.addEventListener("DOMContentLoaded", function() {
    const menuLinks = document.querySelectorAll("nav.menu a");
    menuLinks.forEach(link => {
        link.addEventListener("mouseenter", () => {
            link.style.transform = "scale(1.1)";
        });
        link.addEventListener("mouseleave", () => {
            link.style.transform = "scale(1)";
        });
    });
});