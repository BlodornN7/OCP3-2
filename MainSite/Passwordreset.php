<!DOCTYPE html>

<html>
  <head>
    <title>Récupération du mot de passe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>



<?php
try
{
    $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
}

catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')   {
    $username = $_POST['username'];
    $SecretAnswer = $_POST['SecretAnswer'];

$CheckUsernameAndSecretAnswerSQL = $db->prepare('SELECT * FROM users_new WHERE username = :username AND reponse = :reponse');
$CheckUsernameAndSecretAnswerSQL->bindParam(':username', $username);
$CheckUsernameAndSecretAnswerSQL->bindParam(':reponse', $SecretAnswer);
$CheckUsernameAndSecretAnswerSQL->execute();
$user = $CheckUsernameAndSecretAnswerSQL->fetch();
    if ($user["username"] === $username && $user["reponse"] === $SecretAnswer) {
    header('location: PasswordModification.php');
    }
    
    else {echo 'Identifiants incorrects';}
}


else { include_once('header.php');
    echo '
    <section id="Connexionsection">
<h1 style="text-align: center;">Mot de passe oublié</h1>

<form action="Passwordreset.php" method="POST">
	<label for="username">Nom d\'utilisateur:</label><br>
	<input type="text" id="username" name="username"><br>
	<label for="SecretAnswer">Réponse à la question secrète:</label><br>
	<input type="text" id="SecretAnswer" name="SecretAnswer"><br>
	<input type="submit" value="Modifier le mot de passe"></form>
       
</section>';
     include_once('footer.php');

 }




?>
        