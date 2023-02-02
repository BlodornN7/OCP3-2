<?php
 
 try
 {
     $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
 }
 
 catch (Exception $e) 
 {
     die('Erreur : ' . $e->getMessage());
 }
 
 $SqlQuery ='SELECT * FROM acteur';
 $ShowActeurs = $db->prepare($SqlQuery);
 $ShowActeurs->execute();
 $Acteur = $ShowActeurs->FetchAll();

 ?>

