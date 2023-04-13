<?php $pdo = new PDO('mysql:host=localhost:3306;dbname=keyhouse', "root", "");
$stmt = $pdo->prepare("select login from users");
$stmt->execute();

$users = $stmt->fetchAll(); ?>

 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Réinitialisation de mot de passe</title>
  </head>
  <body>
    <h1>Réinitialisation de mot de passe</h1>
    <form method="post" action="recuplostpassword.php">
       <label for="login">login:</label>
      
      <select id="login" name="login" required>
    <?php foreach ($users as $user): ?>
      <option value="">Choisissez un utilisateur</option>
        <option value="<?= $user['login'] ?>"><?= $user['login'] ?></option>
        <?php endforeach; ?>
        
    </select>
      <br>
      <label for="password">Nouveau mot de passe:</label>
      <input type="password" id="password" name="password" required>
      <br>
      <input type="submit" value="Réinitialiser le mot de passe">
    </form>
  </body>
</html>

