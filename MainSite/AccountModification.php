<?php session_start();
if ($_SESSION['logged_in'] !== true) {
      header ('location: login.php');
      exit;
}
?>
<html>
  <head>
    <title>Page de modification du compte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>

  <section id="Accountmodification">
<?php include_once('header.php'); ?>

<h1> Modification de vos informations : </h1>

<form action="ValidateAccountModification.php" method="POST">
<label for="Name">Nom: <?php echo $_SESSION['name']; ?></label><br>
      <input type="text" id="Name" name="Name"><br><br>
      <input type="submit" value="Modifier mon nom"><br> </form>
 
<form action="ValidateAccountModification.php" method="POST">
<label for="Surname">Prénom : <?php echo $_SESSION['surname']; ?></label><br>
      <input type="text" id="Surname" name="Surname"><br><br>
      <input type="submit" value="Modifier mon prénom"><br> </form>      

<form action="ValidateAccountModification.php" method="POST">
<label for="UserName">Nom d'utilisateur : <?php echo $_SESSION['username']; ?></label><br>
      <input type="text" id="UserName" name="UserName"><br><br>
      <input type="submit" value="Modifier mon nom d'utilisateur"><br> </form>
      
<form action="ValidateAccountModification.php" method="POST">      
<label for="Password">Mot de passe : <?php echo $_SESSION['password'];?></label><br>
      <input type="text" id="Password" name="Password"><br><br>
      <input type="submit" value="Modifier mon mot de passe"><br><br> </form>
            
<form action="ValidateAccountModification.php" method="POST">
<label for="SecretQuestion">Question secrète : <?php echo $_SESSION['secret_question']; ?></label><br>
      <input type="text" id="SecretQuestion" name="SecretQuestion"><br><br>
      <input type="submit" value="Modifier ma question secrète"><br><br> </form>

<form action="ValidateAccountModification.php" method="POST">
<label for="SecretAnswer">Réponse secrète : <?php echo $_SESSION['secret_answer']; ?></label><br>
      <input type="text" id="SecretAnswer" name="SecretAnswer"><br><br>
      <input type="submit" value="Modifier mon réponse secrète"><br> </form>

</section>


<?php include_once('footer.php'); ?>
</body>
</html>