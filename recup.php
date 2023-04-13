<?php
$idme = $_POST['idme'];
$acquis = $_POST['acquis'];
$adresse = $_POST['adresse'];
$etage = $_POST['etage'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
// $date = $_POST['date'];
$mandat = $_POST['mandat'];
$type = $_POST['type'];
$whokeys = $_POST['whokeys'];

$host = "localhost:3306";
$dbname = "keyhouse";
$username = "root";
$password = "";

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("INSERT INTO clés (idme, acquis, adresse, etage, cp, ville, date, mandat, type, whokeys) VALUES (:idme, :acquis, :adresse, :etage, :cp, :ville, NOW(), :mandat, :type, :whokeys)");

$stmt->bindValue(":idme", $idme);
$stmt->bindValue(":acquis", $acquis);
$stmt->bindValue(":adresse", $adresse);
$stmt->bindValue(":etage", $etage);
$stmt->bindValue(":cp", $cp);
$stmt->bindValue(":ville", $ville);
// $stmt->bindValue(":date", $date);
$stmt->bindValue(":mandat", $mandat);
$stmt->bindValue(":type", $type);
$stmt->bindValue(":whokeys", $whokeys);

$stmt->execute();

header("Location: affichage.php");
exit();
