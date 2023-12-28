<?php
// Informations de connexion à la base de données
$servername = "localhost"; // Le nom du serveur MySQL
$username = "id21530181_enzo"; // Votre nom d'utilisateur MySQL
$password = "Enzo.slim7"; // Votre mot de passe MySQL
$database = "id21530181_tokyoanime"; // Le nom de votre base de données

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}
?>
