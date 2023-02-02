<?php session_start();
if ($_SESSION['logged_in'] !== true) {
  header ('location: login.php');
  exit;
} ?>
<html>
  <head>
    <title>Page d'information du compte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

<?php include_once('header.php'); ?>

<section id="Accountinfo">
<h1> Voici un récapitulatif de vos informations : </h1>

<p> <b>Nom :</b></p>
 <?php echo $_SESSION['name']; ?>
 
 <p> <b>Prénom :</b></p>
 <?php echo $_SESSION['surname']; ?>

<p> <b>Nom d'utilisateur</b> :</p>
<?php echo $_SESSION['username']; ?> 

<p> <b>Mot de passe :</b></p>
<?php echo $_SESSION['password']; ?> 

<p><b>Question secrète :</b></p>
<?php echo $_SESSION['secret_question']; ?> 

<p><b>Réponse secrète</b></p>
 <?php echo $_SESSION['secret_answer']; ?> 
<p><a href="AccountModification.php">Modifier mes informations</a></p>

</section>

<?php include_once('footer.php'); ?>
</body>
</html>