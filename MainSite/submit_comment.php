<?php
session_start();
try
{
    $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
}

catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}

$post = $_POST["Post"];
$user_id = $_SESSION["user_id"];
$acteur_id = 1;

$SqlQuery = 'INSERT INTO post(post, id_user, id_acteur) VALUES (:post, :id_user, :id_acteur)';
$SetComment = $db->prepare($SqlQuery);
$SetComment->execute([
'post' => $post,
'id_user' => $user_id,
'id_acteur' => $acteur_id
]);
header('location: pageacteur.php');
?>