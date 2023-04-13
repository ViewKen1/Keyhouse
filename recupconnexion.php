<?php 

$host = "localhost:3306";
$usernameDB = "root";
$passwordDB = "";
$dbname = "keyhouse";

$conn = new mysqli($host, $usernameDB, $passwordDB, $dbname);

// Récupération des données du formulaire
$username = $_POST['login'];
$password = $_POST['password'];

// Requête SQL pour vérifier les informations de connexion
$sql = "SELECT * FROM users WHERE login='$username' AND password='$password'";
$result = $conn->query($sql);

// Vérification des résultats de la requête
if ($result->num_rows > 0) {
  // Connexion réussie, rediriger l'utilisateur vers la page d'accueil
  header("Location: affichage.php");
} else {
  // Mauvais nom d'utilisateur ou mot de passe, afficher un message d'erreur
  header("Location: connection.php?error=incorrect");
}

// Fermer la connexion à la base de données
$conn->close();
?>