<?php session_start(); ?>

<?php if ($_SESSION['logged_in'] !== true) {
	header ('location: login.php');
	exit;
}
?>

<?php 
$id = $_GET['id']; 
include_once('Acteur.php');
foreach($Acteur as $Acteurs) {
if ($id == $Acteurs['id_acteur']) {
    include_once('test.php');

}};



 ?>