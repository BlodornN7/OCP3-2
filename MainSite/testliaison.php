<?php 
try
{
    $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
}

catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}

$SqlQuery1 = 'SELECT prenom, post.post, post.date_add FROM users_new INNER JOIN post ON users_new.id_user=post.id_user WHERE id_acteur = :id_acteur';
$testliaisontable = $db->prepare($SqlQuery1);
$testliaisontable->bindParam(':id_acteur', $Acteurs['id_acteur']);
$testliaisontable->execute();
$result = $testliaisontable->FetchAll();

?>