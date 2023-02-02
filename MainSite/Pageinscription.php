<!DOCTYPE html>

<html>
  <head>
    <title>Page d'inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

       <?php include_once('header.php'); ?>

<section>
 <div id="Connexionsection">    
	<h1>Page d'inscription</h1>
    <form action="submit_contact.php" method="POST">
      <label for="Name">Nom</label><br>
      <input type="text" id="Name" name="Name"><br>
      <label for="Surname">Prénom</label><br>
      <input type="text" id="Surname" name="Surname"><br>
      <label for="UserName">Nom d'utilisateur</label><br>
      <input type="text" id="UserName" name="UserName"><br>
      <label for="Password">Mot de passe</label><br>
      <input type="text" id="Password" name="Password"><br>
      <label for="SecretQuestion">Question secrète</label><br>
      <input type="text" id="SecretQuestion" name="SecretQuestion"><br>
      <label for="SecretAnswer">Réponse à la question secrète</label><br>
      <input type="text" id="SecretAnswer" name="SecretAnswer"><br><br>
      <input type="submit" value="Inscription"><br>
    </form>
    </div> 
</section>


   <?php include_once('footer.php'); ?>
  </body>
</html>

