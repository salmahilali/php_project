<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Kidtopia</title>
    <link rel="stylesheet" href="numbers.css">
    <link rel="icon" href="logo.png" type="image/png">
</head>
<body>
<nav class="navbar">
    <img class="si" src="logo.png" alt="Logo Kidtopia">
    <h1 class="navtext">Les couleurs</h1>
</nav>
<div class="links">
    <?php
    $query = "SELECT * FROM colors";
    $result = $conn->query($query);
    $audioMap = [];

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $audioMap[$row['id']] = $row['audio_path'];
            echo '<div class="link-item">';
            echo '<img class="barimg" src="' . htmlspecialchars($row['image_path']) . '" alt="Image du mois" onclick="playAudio(' . intval($row['id']) . ')">';
            echo '<div class="sound-icon">🔊</div>'; 
            echo '</div>';
        }
    } else {
        echo '<p>Aucune image trouvée.</p>';
    }
    ?>
</div>
<script>
    
    const audios = <?php echo json_encode($audioMap); ?>;
    let currentAudio = null;

    function playAudio(id) {
        if (currentAudio) {
            currentAudio.pause();
            currentAudio.currentTime = 0;
        }
        
        const audioPath = audios[id];
        currentAudio = new Audio(audioPath);
        currentAudio.play();
    }
</script>

</body>
</html>

