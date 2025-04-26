<?php
$conn = new mysqli("localhost", "root", "", "phpmyadmin");

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
?>


