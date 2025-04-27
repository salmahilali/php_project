<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Kidtopia</title>
    <link rel="stylesheet" href="site.css"> <!-- External CSS -->
    <link rel="icon" href="logo.png" type="image/png">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <div class="bar">
        <!-- Logo -->
        <img class="si" src="logo.png" alt="Logo Kidtopia">

        <!-- Dynamic Links -->
        <div class="links">
            <?php
            $result = $conn->query("SELECT * FROM navbar_items");
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="link-item">';
                    echo '<a href="' . htmlspecialchars($row['link_path']) . '" class="nav-link">';
                    echo '<img class="barimg" src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['title']) . '">';
                    echo '</a>';
                    echo '<span class="link-title">' . htmlspecialchars($row['title']) . '</span>';
                    echo '</div>';
                }
            } else {
                echo '<p>No navigation items found.</p>';
            }
            ?>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="main-content">
    <div class="hero">
        <h1 class="bienvenue">Bienvenue sur Kidtopia !</h1>
        <h2 class="cliquer">Un monde magique pour jouer, apprendre et s’amuser !<br>Clique sur une icône pour commencer ton aventure !</h2>
    </div>

    <!-- Door Animation (Night Content) -->
    <div class="nightcontent">
        <div class="doorway_door door">
            <div class="door_side">
                <div class="door_pannel"></div>
                <div class="door_pannel"></div>
                <div class="door_pannel"></div>
                <div class="door_pannel"></div>
                <div class="door_handel"></div>
            </div>
        </div>
        <div class="door_side"></div>
    </div>
</div>

</body>
</html>

