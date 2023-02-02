<!DOCTYPE html>

<html>
  <head>
    <title>Page de connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

<?php include_once('header.php');
 
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
$password = $_POST['password'];


$CheckUsernameAndPassWordSQL = $db->prepare('SELECT * FROM users_new WHERE username = :username AND password = :password');
$CheckUsernameAndPassWordSQL->bindParam(':username', $username);
$CheckUsernameAndPassWordSQL->bindParam(':password', $password);
$CheckUsernameAndPassWordSQL->execute();
$user3 = $CheckUsernameAndPassWordSQL->fetch();

if ($user3["username"] === $username && $user3["password"] === $password) {
    
    session_start ();
    $_SESSION['name'] = $user3['nom'];
    $_SESSION['surname'] = $user3['prenom'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['secret_question'] = $user3['question'];
    $_SESSION['secret_answer'] = $user3['reponse'];
    $_SESSION['logged_in'] = true;
    $_SESSION['user_id'] = $user3['id_user'];
    header ('location: Accueil.php');
        
}
else {echo '<section id="Connexionsection">Identifiants incorrects<br> <a href="login.php">Revenir à la page de connexion</section>';}}


else { echo ' <section id="Connexionsection">   
	<h1>Page de connexion</h1>
    <form method="POST">
      <label for="username">Nom d\'utilisateur:</label><br>
      <input type="text" id="username" name="username"><br>
      <label for="password">Mot de passe:</label><br>
      <input type="text" id="password" name="password"><br><br>
      <input type="submit" value="Se connecter"> </form><br>
      <button><a href="Passwordreset.php">Mot de passe oublié</button>
      
      
    </form>
    </div> 
</section>';
 } ?> 
</body>
<?php include_once('footer.php'); ?>        


        