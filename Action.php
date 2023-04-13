<?php

$pdo = new PDO('mysql:host=localhost:3306;dbname=keyhouse', "root", "");
$stmt = $pdo->prepare("select * from clés order by nom");
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
    <link rel="stylesheet" href="action.css" />
    <title>Questionnaire</title>
    <nav class= menu>
        <ul>
            <li><a href="ajout.php">Ajout Key</a></li>
            <li><a href="affichage.php">Affichage Tableau</a></li>
            <li><a href="action.php">Action</a></li>
        </ul>
    </nav>
</head>




  
<body>
  <h1>Questionnaire</h1>
  <div class="question-container">
    <button onclick="poserQuestion()">Prise</button>
    <div id="question-container" style="display:none;">
      <p class="question">Qui prend la clé ?</p>
      <input type="text" class="reponse-input" id="reponse" placeholder="Votre réponse">
      <button class="reponse-button" onclick="afficherReponse()">A la clé 003</button>
      <p class="reponse" id="reponse-text"></p>
    </div>
    <button onclick="poserQuestion()">Transfert</button>
    <div id="question-container" style="display:none;">
      <p class="question">A qui passez vous la clé?</p>
      <input type="text" class="reponse-input" id="reponse" placeholder="Votre réponse">
      <button class="reponse-button" onclick="afficherReponse()">A la clé 003</button>
      <p class="reponse" id="reponse-text"></p>
    </div>
    <button onclick="poserQuestion()">Remise</button>
    <div id="question-container" style="display:none;">
      <p class="question">Vous avez déposé la key ?</p>
      <input type="text" class="reponse-input" id="reponse" placeholder="Votre réponse">
      <button class="reponse-button" onclick="afficherReponse()">Est au tableau</button>
      <p class="reponse" id="reponse-text"></p>
    </div>
  </div>




  <script>
    function poserQuestion() {
      document.getElementById("question-container").style.display = "block";
    }

    function afficherReponse() {
      var reponse = document.getElementById("reponse").value;
      document.getElementById("reponse-text").innerText = "Votre réponse : " + reponse;
    }
  </script>
</body>
</html>
