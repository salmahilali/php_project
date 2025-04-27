<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>X-O 👬 Mode 2 Joueurs</title>
  <link rel="stylesheet" href="xo.css">
</head>
<body>
  <h1>👫 Joueur vs Joueur</h1>
  <div id="game-board">
    <?php for ($i = 0; $i < 9; $i++): ?>
      <div class="cell" data-index="<?= $i ?>"></div>
    <?php endfor; ?>
  </div>
  <p id="status">Joueur X commence !</p>
  <button onclick="restartGame()">🔄 Rejouer</button>

  <script src="jeu.js"></script>
  <script>
    const mode = '2P';
  </script>
</body>
</html>
