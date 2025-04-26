<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Jeu X-O 🎮</title>
  <link rel="stylesheet" href="xo.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #fff7e6;
      font-family: 'Comic Sans MS', cursive;
    }
    .center-box {
      text-align: center;
      background: #fff4cc;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 0 15px #ffcc80;
    }
    .center-box h1 {
      color: #ff7f50;
    }
    .center-box button {
      background-color: #ffa500;
      color: white;
      border: none;
      padding: 12px 25px;
      font-size: 16px;
      border-radius: 12px;
      cursor: pointer;
      margin: 10px;
    }
    .center-box button:hover {
      background-color: #ff8c00;
    }
  </style>
</head>
<body>
  <div class="center-box">
    <h1>Bienvenue au jeu X-O 🎈</h1>
    <p>Choisis ton mode de jeu :</p>
    <button onclick="location.href='jeuà2.php'">👫 Jouer à Deux</button>
    <button onclick="location.href='jeumachine.php'">🤖 Contre la Machine</button>
  </div>
</body>
</html>
