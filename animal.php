<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Kidtopia</title>
    <link rel="stylesheet" href="animal.css">
    <link rel="icon" href="logo.png" type="image/png">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <img class="si" src="logo.png" alt="Logo Kidtopia">
    <h1 class="navtext">Les animaux</h1>
</nav>

<!-- Section des images -->
<div class="links">
    <?php
    $query = "SELECT * FROM interfaceanimal";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="link-item">';
            echo '<a href="' . htmlspecialchars($row['link']) . '">'; // lien sans target="_blank"
            echo '<img class="barimg" src="' . htmlspecialchars($row['image_path']) . '" alt="Image d\'animal">';
            echo '</a>';
            echo '</div>';
        }
    } else {
        echo '<p>Aucune image trouvée.</p>';
    }
    ?>
</div>

</body>
</html>
