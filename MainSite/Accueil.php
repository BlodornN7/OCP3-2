<?php session_start();

 if ($_SESSION['logged_in'] !== true) {
	  header ('location: login.php');
	  exit;
}
?>


<!DOCTYPE html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php include_once('header.php'); ?>

<main>
	
<div class="h1">

    <p>Présentation lroem ipsum dksjfdlfskfhjdsklfhsjfdklshjdskfshdjk</p>
    <div id="illustrationbox">
    <img id="illustration" src="images/logo.png">
    </div>
    

</div>


<div> 

	<h2>Texte acteurs & partenaires</h2>
	<p>Présentation lorem ipsum dksjfdlfskfhjdsklfhsjfdklshjdskfshdjk</p>

</div>


<section class="h3link">

	<div class="mainborder">
		<?php include_once('acteur.php');
		 foreach ($Acteur as $Acteurs) { ?>
			
		 

		<div class="frame">
		<?php echo '<img class="image" src="'.$Acteurs['logo'].'">'; ?>
			 <h3> <?php echo $Acteurs['acteur']; ?></h3>
			 <p> <?php echo $Acteurs['description'];?>  </p>
			 <div class="border">
		<?php echo '<button class="readmore"><a href="pageacteur.php?id='.$Acteurs['id_acteur'].'">lire la suite</a></button>'; ?>
		 
		</div>
	</div>
	 	
	  	 
	  


	<?php } ?>
	</section>


</main>
<?php include_once('footer.php'); ?>
</body>
</html> 

