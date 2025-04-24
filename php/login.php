<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion - Kidtopia</title>
  <link rel="stylesheet" href="login.css">
  <link rel="icon" href="logo.png" type="png">
</head>
  <div class="login-container">
    <img src ="logo1.png" >
    <form id="loginForm">
      <input class="nom" id="nom" type="text" name="nom" placeholder="Nom"  required>
      <br>
      <input class="prenom" id="prenom" type="text" name="prenom" placeholder="Prénom" required>
      <br>
      <input class="age" id="age" type="number" name="age" placeholder="Âge" required>
      <br>
      <button type="submit">Allez!</button>
    </form>
  </div>
  <script>
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("loginForm");
  const button = form.querySelector("button");

  form.addEventListener("submit", function (event) {
    event.preventDefault(); // empêche l'envoi du formulaire

    // Effet étincelle
    const sparkle = document.createElement("div");
    sparkle.classList.add("sparkle");
    sparkle.textContent = "✨";
    button.appendChild(sparkle);
    setTimeout(() => sparkle.remove(), 1000);

    // Logique de redirection
    const nom = document.getElementById("nom").value;
    const prenom = document.getElementById("prenom").value;
    const age = parseInt(document.getElementById("age").value);

    setTimeout(() => {
      if (age < 3) {
        window.location.href = "http://localhost/contenu_moins3.PHP";
      } else {
        window.location.href = "http://localhost:3000/contenu_plus3.PHP";
      }
    }, 900); // Délai pour l'animation sparkle
  });
});
</script>


</body>
</html>
