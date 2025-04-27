<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Kidtopia</title>
    <link rel="stylesheet" href="learn.css">
    <link rel="icon" href="logo.png" type="image/png">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <img class="si" src="logo.png" alt="Logo Kidtopia">
    <h1 class="navtext">Petits Génies</h1>
</nav>

<!-- Section des images -->
<div class="links">
    <?php
    $query = "SELECT * FROM images_gallery";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="link-item">';
            echo '<a href="' . htmlspecialchars($row['link']) . '">'; // SUPPRIMÉ target="_blank"
            echo '<img class="barimg" src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['title']) . '">';
            echo '</a>';
            echo '<div class="link-title">' . htmlspecialchars($row['title']) . '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>Aucune image trouvée.</p>';
    }
    ?>
</div>
</body>
</html>