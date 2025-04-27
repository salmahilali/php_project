<?php
date_default_timezone_set('Europe/Paris');

$heure = date('H');
if ($heure >= 0 && $heure < 7){
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Accès Restreint</title>
  <link rel="stylesheet" href="porte.css"> 
</head>
<body>
    <h1>Les étoiles brillent pour toi.</h1>
    <h1>C'est l'heure de plonger dans un monde de rêves magiques. Bonne nuit !</h1>
    <img src="lune.png" class="lune">
    <audio src="lune.mp3" autoplay loop></audio>
</body>
</html>
<?php
} else {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion - Kidtopia</title>
  <link rel="stylesheet" href="login.css">
  <link rel="icon" href="logo.png" type="image/png"> <!-- petite correction du type -->
</head>
<body>
  <div class="login-container">
    <img src="logo1.png">
    <form id="loginForm">
      <input class="nom" id="nom" type="text" name="nom" placeholder="Nom" required>
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
      event.preventDefault(); 
      const sparkle = document.createElement("div");
      sparkle.classList.add("sparkle");
      sparkle.textContent = "✨";
      button.appendChild(sparkle);
      setTimeout(() => sparkle.remove(), 1000);
      const nom = document.getElementById("nom").value;
      const prenom = document.getElementById("prenom").value;
      const age = parseInt(document.getElementById("age").value);

      setTimeout(() => {
        if (age < 3) {
          window.location.href = "http://localhost/php/contenu_moins3.php";
        } else {
          window.location.href = "http://localhost/php/contenu_plus3.php";
        }
      }, 700);
    });
  });
  </script>

</body>
</html>
<?php
}
?>
