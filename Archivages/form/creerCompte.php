

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>connexion</title>
</head>
<body>
	 <form method="post" action="#" >
	 	<section>
	 	<h1>Creer Compte utilisateur</h1>
	 	<label>Nom Utilisateur</label>
	 	<input type="text" name="pseudo" placeholder="Nom utilisateur">
	 	<label>Mot de passe</label>
	 	<input type="password" name="password" placeholder="Mot de passe" >
	 	<label> Confirmer le Mot de passe</label>
	 	<input type="password" name="conf_password" placeholder=" Confirmez Mot de passe">
	 	
	 	<input type="submit" name="Compte" value="ENVOYER" >
	 	<p>voulez vous vous connectez?<a href="login.php"> Se Connecter</a> </p>
	 	</section>
	 </form>
</body>
</html>
<?php 

require './connexion.php';
$i = new simpleCrud('connexion','localhost','root','');
if(isset($_POST['Compte']))
{
	$pseudo=$_POST['pseudo'];
	$password=$_POST['password'];
	$pseudo=$_POST['conf_password'];

		if(!empty($_POST['pseudo'])&&!empty($_POST['password'])&&!empty($_POST['conf_password '])){
			$i->insertUser($pseudo,$password);
		    echo 'succes...';

		}else
			{ 
				echo 'erreur....';

			}
}



 ?>

