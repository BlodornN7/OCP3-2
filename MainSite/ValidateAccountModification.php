<?php session_start();
try
{
    $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
}

catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}

if ($_POST['Name']) {
    $nom = $_POST['Name'];
$ModifyAccountInfoSQL = $db->prepare('UPDATE users_new SET nom = :nom WHERE id_user = :id_user');
$ModifyAccountInfoSQL->bindParam(':id_user', $_SESSION['user_id']);
$ModifyAccountInfoSQL->bindParam(':nom', $nom);
$ModifyAccountInfoSQL->execute();
session_start();
$_SESSION['name'] = $nom;
header('location: AccountModification.php');

}

elseif ($_POST['Surname']) {
    $prenom = $_POST['Surname'];
$ModifyAccountInfoSQL = $db->prepare('UPDATE users_new SET prenom = :prenom WHERE id_user = :id_user');
$ModifyAccountInfoSQL->bindParam(':id_user', $_SESSION['user_id']);
$ModifyAccountInfoSQL->bindParam(':prenom', $prenom);
$ModifyAccountInfoSQL->execute();
session_start();
$_SESSION['surname'] = $prenom;
header('location: AccountModification.php');

}

elseif ($_POST['UserName']) {
    $username = $_POST['UserName'];
    $ModifyAccountInfoSQL = $db->prepare('UPDATE users_new SET username = :username WHERE id_user = :id_user');
    $ModifyAccountInfoSQL->bindParam(':username', $username);
    $ModifyAccountInfoSQL->bindParam(':id_user', $_SESSION['user_id']);
$ModifyAccountInfoSQL->execute();
session_start();
$_SESSION['username'] = $username;
header('location: AccountModification.php');
    }
elseif ($_POST['Password']) {
    $password = $_POST['Password'];
    $ModifyAccountInfoSQL = $db->prepare('UPDATE users_new SET password = :password WHERE id_user = :id_user');
    $ModifyAccountInfoSQL->bindParam(':id_user', $_SESSION['user_id']);
    $ModifyAccountInfoSQL->bindParam(':password', $password);
$ModifyAccountInfoSQL->execute();
session_start();
$_SESSION['password'] = $password;
header('location: AccountModification.php');
    }
elseif ($_POST['SecretQuestion']) {
    $secretquestion = $_POST['SecretQuestion'];
    $ModifyAccountInfoSQL = $db->prepare('UPDATE users_new SET question = :question WHERE id_user = :id_user');
    $ModifyAccountInfoSQL->bindParam(':id_user', $_SESSION['user_id']);
    $ModifyAccountInfoSQL->bindParam(':question', $secretquestion);
$ModifyAccountInfoSQL->execute();
session_start();
$_SESSION['secret_question'] = $secretquestion;
header('location: AccountModification.php');
    }
elseif ($_POST['SecretAnswer']) {
    $secretanswer = $_POST['SecretAnswer'];
    $ModifyAccountInfoSQL = $db->prepare('UPDATE users_new SET reponse = :reponse WHERE id_user = :id_user');
    $ModifyAccountInfoSQL->bindParam(':id_user', $_SESSION['user_id']);
    $ModifyAccountInfoSQL->bindParam(':reponse', $secretanswer);
$ModifyAccountInfoSQL->execute();
session_start();
$_SESSION['secret_answer'] = $secretanswer;
header('location: AccountModification.php');
    }
else {
     echo "Aucune entrée detectée";
};