<?php

$pdo = new PDO('mysql:host=localhost:3306;dbname=keyhouse', "root", "");
$stmt = $pdo->prepare("select * from clés order by idme");
$stmt->execute();

$clés = $stmt->fetchAll(); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Formulaire</title>
    <link rel="stylesheet" href="stylecss/affichage.css" />
    <title>Personnes</title>
    <nav class= menu>
        <ul>
            <li><a href="connection.php">Compte</a></li>
            <li><a href="insertiondedonnée.php">Ajout Key</a></li>
            <li><a href="affichage.php">Affichage Tableau</a></li>
        </ul>
    </nav>
</head>

<body>
    
    <form  action="affichage.php" class="tableau">
    <h1>Voici les Clés</h1>


    <table>
        <tr>
            <th>IDME</th>
            <th>Acquis</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Ville</th>
            <th>etage</th>
            <th>Date</th>
            <th>Mandat</th>
            <th>Type</th>
            <th>Qui à la clé</th>
        </tr>

       <?php for($i = 0; $i < count($clés) ; $i++): ?>
        <tr>
            <td><?= $clés[$i]['idme'] ?></td>
            <td><?= $clés[$i]['acquis'] ?></td>
            <td><?= $clés[$i]['adresse'] ?></td>
            <td><?= $clés[$i]['cp'] ?></td>
            <td><?= $clés[$i]['ville'] ?></td>
            <td><?= $clés[$i]['etage'] ?></td>
            <td><?= $clés[$i]['date'] ?></td>
            <td><?= $clés[$i]['mandat'] ?></td>
            <td><?= $clés[$i]['type'] ?></td>
            <td><?= $clés[$i]['whokeys'] ?></td>
        </tr>
        <?php endfor; ?> 
    </table>
       </form>
</body>
</html>