<?php
// Page principale
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Le Monde Magique des Émotions</title>
  <link rel="stylesheet" href="émotions.css" />
</head>
<body>
  <div class="container">
    <header>
      <h1>🌈 Le Monde Magique des Émotions 🌟</h1>
      <p>Découvre les émotions en cliquant sur les images !</p>
    </header>

    <div class="cards">
      <div class="card" onclick="showEmotion('joie')">
       <strong>Joie</strong>
      </div>
      <div class="card" onclick="showEmotion('tristesse')">
        <strong>Tristesse</strong>
      </div>
      <div class="card" onclick="showEmotion('colere')">
        <strong>Colère</strong>
      </div>
      <div class="card" onclick="showEmotion('surprise')">
        <strong>Surprise</strong>
      </div>
    </div>

    <div id="description" class="description-box"></div>
  </div>

  <script src="émotions.js"></script>
</body>
</html>
