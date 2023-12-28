<?php
include 'config.php';

// Récupérer les données du formulaire
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Préparer et exécuter la requête SQL pour insérer les données
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

if ($stmt->execute()) {
  // Succès de l'inscription
  echo json_encode(['success' => true]);
} else {
  // Échec de l'inscription
  echo json_encode(['success' => false, 'error' => $conn->error]);
}

// Fermer la connexion à la base de données
$stmt->close();
$conn->close();
?>
