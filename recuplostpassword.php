<?php
  // Récupérer les données soumises
  $host = "localhost:3306";
  $usernameDB = "root";
  $passwordDB = "";
  $dbname = "keyhouse";
  
  $conn = new mysqli($host, $usernameDB, $passwordDB, $dbname);
  
  // Récupération des données du formulaire
  $username = $_POST['login'];
  $password = $_POST['password'];

  // Vérifier la connexion
  if ($conn->connect_error) {
    die("La connexion à la base de données a échoué: " . $conn->connect_error);
  }

  // Mettre à jour le mot de passe de l'utilisateur
  $sql = "UPDATE users SET password='$password' WHERE login='$username'";

  if ($conn->query($sql) === TRUE) {

  header("Location: connection.php");
  } else {
    echo "Une erreur est survenue lors de la réinitialisation du mot de passe: " . $conn->error;
  }

  // Fermer la connexion à la base de données
  $conn->close();
?>
