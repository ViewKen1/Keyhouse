
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Connexion</title>
    <link rel="stylesheet" href="stylecss/connection.css" /> 
    <!-- Pas tres utile de mettre le menu deroulant sur la page de connexion 
    <nav class="menu">
        <ul>
            <li><a href="connection.php">Compte</a></li>
            <li><a href="insertiondedonnée.php">Ajout Key</a></li>
            <li><a href="affichage.php">Affichage Tableau</a></li>
        </ul>
    </nav> -->

  </head>

  <body>
  <form action="recupconnexion.php" method="post" class="titre">
      <h1>Connexion</h1>
    <input type="text" name="login" placeholder="Identifiant" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <input type="submit" value="Se connecter">



      <div class="bottom-text">
       Mot de passe oublié <a href="lostpassword.php">Cliquez ici</a>
      </div>
    </form>
    <script>

// Récupérer le paramètre GET "error" de l'URL
const urlParams = new URLSearchParams(window.location.search);
const error = urlParams.get('error');

// Afficher le message d'erreur dans une fenêtre pop-up si nécessaire
if (error === 'incorrect') {
  alert('Nom d\'utilisateur ou mot de passe incorrect.');
}
</script>


  </body>
</html>
