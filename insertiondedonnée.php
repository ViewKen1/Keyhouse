<?php $pdo = new PDO('mysql:host=localhost:3306;dbname=keyhouse', "root", "");
$stmt = $pdo->prepare("select login from users");
$stmt->execute();

$users = $stmt->fetchAll(); ?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Formulaire</title>
    <link rel="stylesheet" href="stylecss/formul1.css" />
    <nav>
        <ul>
            <li><a href="connection.php">Connection</a></li>
            <li><a href="insertiondedonnée.php">Ajout clé</a></li>
            <li><a href="affichage.php">Affichage tableau</a></li>
        </ul>
    </nav>

  </head>

  <body>

    <form action="recup.php" method="post" class="titre">
      <div class="formu">

      <label for="idme">Identifiant Clé :</label>
        <input type="number" id="idme" name="idme" required />

        <label for="acquis">Nom du client :</label>
        <input type="text" id="acquis" name="acquis" required />

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" required />

        <label for="etage">N° Etage :</label>
        <input type="number" id="etage" name="etage" required />

        
        <label for="cp">code postal :</label>
        <input type="number" id="cp" name="cp" required />

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required />


        <!-- <label for="date">Date :</label>
        <input type="date" id="date" name="date" required /> -->

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
        <option value="<?= $user['login'] ?>"><?= $user['login'] ?></option>
        <?php endforeach; ?>
        </select>

        <input type="submit" class="bouton" value="Ajouter" />
      </div>
    </form>


  <table id="table-clients" class="tab">
    <thead>
      <tr>
      <th>IDME</th>
            <th>Acquis</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Ville</th>
           <!-- <th>Date</th> -->
            <th>Mandat</th>
            <th>Type</th>
        <th>Qui à la clé</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>
  </form>
</body>
</html>



