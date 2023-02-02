<?php if (session_status() == PHP_SESSION_ACTIVE) { echo '

<header> 
    

<nav id="navbox">
		 <?php echo <p><a href="Accountinfo.php">'.$_SESSION['surname'].' '.$_SESSION['name'].'</a></p>
		 <p> <a href="disconnect.php"> Se déconnecter </a> </p>
		 </nav>	
	     <a id="mainlogo" href="Accueil.php"><img src="images/logo.png" alt="Logo de l\'entreprise"></a>
		 
	
</header>'; }
else {echo '<header>
    

	<nav id="navbox">
			 <p> <a href="Connexionpage.php"> Se connecter </a> </p>
			 <p> <a href="Pageinscription.php"> S\'inscrire </a> </p>
			 </nav>	
			 <a id="mainlogo" href="login.php"><img src="images/logo.png" alt="Logo de l\'entreprise"></a>
			 
		
	</header>';}
?>