<?php $pdo = new PDO('mysql:host=localhost:3306;dbname=keyhouse', "root", "");
$stmt = $pdo->prepare("select username from users");
$stmt->execute();

$users = $stmt->fetchAll(); ?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Formulaire</title>
    <link rel="stylesheet" href="stylecss/ajout.css" />
    <nav class= menu>
        <ul>
            <li><a href="connection.php">Compte</a></li>
            <li><a href="insertiondedonnée.php">Ajout Key</a></li>
            <li><a href="affichage.php">Affichage Tableau</a></li>
        </ul>
    </nav>

  </head>

  <body>

    <form action="ajout.php" method="post" class="titre">
        <div class="debut">
        
        <label for="cle">Identifiant clé :</label>
        <input type="int" id="cle" name="cle" required />

        <label for="nom">Nom du client :</label>
        <input type="text" id="nom" name="nom" required />

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" required />

        <label for="date">Date :</label>
        <input type="date" id="date" name="date" required />

        <label for="mandat">Mandat :</label>
        <select id="mandat" name="mandat" required>
          <option value="">Choisissez un mandat</option>
          <option value="Simple">Simple</option>
          <option value="Exclusif">Exclusif</option>
        </select>

        <label for="type">Type :</label>
        <select id="type" name="type" required>
          <option value="">Choisissez un type</option>
          <option value="Vente">Vente</option>
          <option value="Location">Location</option>
        </select>

        <label for="whokeys">Détenteur :</label>
        <select id="whokeys" name="whokeys" required>
        <option value="">Qui détient cette clé ?</option>
        <?php foreach ($users as $user): ?>
        <option value="<?= $user['username'] ?>"><?= $user['username'] ?></option>
        <?php endforeach; ?>
        </select>

        <input type="submit" class="bouton" value="Ajouter" />
        </div>
  </form>
</body>
</html>