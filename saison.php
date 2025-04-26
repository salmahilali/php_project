<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Kidtopia</title>
    <link rel="stylesheet" href="saison.css">
    <link rel="icon" href="logo.png" type="image/png">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <img class="si" src="logo.png" alt="Logo Kidtopia">
    <h1 class="navtext">Les saisons</h1>
</nav>

<!-- Section des images -->
<div class="links">
    <?php
    $query = "SELECT * FROM saison";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="link-item">';
            echo '<img class="barimg" src="' . htmlspecialchars($row['image_path']) . '" alt="" onclick="playAudio(' . intval($row['id']) . ')">';
            echo '<div class="sound-icon">🔊</div>'; 
            echo '</div>';
        }
    } else {
        echo '<p>Aucune image trouvée.</p>';
    }
    ?>
</div>

<!-- Audio player hidden -->
<audio id="audioPlayer" style="display:none;"></audio>

<!-- JavaScript to play audio -->
<script>
function playAudio(id) {
    var audioPlayer = document.getElementById('audioPlayer');
    audioPlayer.src = 'serve-audio.php?id=' + id;
    audioPlayer.play();
}
</script>

</body>
</html>
