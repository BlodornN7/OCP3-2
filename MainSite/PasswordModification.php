<!DOCTYPE html>

<html>
  <head>
    <title>Nouveau mot de passe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>




<?php include_once("header.php");
try
{
    $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
}

catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']))  {
    $username = $_POST['username'];
    $newpassword = $_POST['NewPassword'];
    

// Demande à db de mettre à jour le mot de passe de l'utilisateur
$UpdateUserPasswordSQL = $db->prepare('UPDATE users_new SET password = :password WHERE username = :username');
$UpdateUserPasswordSQL->bindParam(':username', $username);
$UpdateUserPasswordSQL->bindParam(':password', $newpassword);
$UpdateUserPasswordSQL->execute();
$passwordupdated = $UpdateUserPasswordSQL;
header('location: Connexionpage.php');

}
else { echo '

<section id="Connexionsection">
<h1>Modification du mot de passe</h1>

<form method="POST">
	<label for="username">Nom d\'utilisateur:</label><br>
	<input type="text" id="username" name="username"><br>
    <label for="NewPassword">Nouveau mot de passe</label><br>
    <input type="text" id="NewPassword" name="NewPassword"><br><br>
    <input type="submit" value="Modifier le mot de passe"> </form>
</section>';}







include_once('footer.php'); ?>

