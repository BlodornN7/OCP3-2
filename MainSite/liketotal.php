<?php
try
 {
     $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
 }
 
 catch (Exception $e) 
 {
     die('Erreur : ' . $e->getMessage());
 }
$idacteur = 2;
 $getlikesum = $db->prepare('SELECT SUM(vote) AS total FROM vote WHERE id_acteur = :id_acteur');
 $getlikesum->bindParam(':id_acteur', $idacteur);
 $getlikesum->execute();
 $result = $getlikesum->FetchAll();

 ?>