<?php
 

$SqlQuery = 'SELECT * FROM post WHERE id_acteur = :id_acteur';
$getcomment = $db->prepare($SqlQuery);
$getcomment->bindParam(':id_acteur', $Acteurs['id_acteur']);
$getcomment->execute();
$comment = $getcomment->fetchAll();
