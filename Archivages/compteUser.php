<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=connexion', 'root', '');
if(isset($_POST['CompteUser'])){
	if(!empty($_POST['pseudo']) AND !empty($_POST['password']) AND !empty($_POST['conf_psswd'])){
		$pseudo=htmlspecialchars($_POST['pseudo']);
		$password=sha1($_POST['password']);
		$pass_conf=sha1($_POST['conf_psswd']);


		 if($password== $pass_conf){
		 	$insertUser= $bdd->prepare('INSERT INTO utilisateur(login, passe) VALUES(?, ?)') ;
		    $insertUser->execute(array($pseudo, $password));
		 }else{
		 	echo 'le mot de passe doit etre conforme';

		 }
		

		$recupUser = $bdd->prepare('SELECT * FROM utilisateur WHERE login= ? AND passe= ?');
		$recupUser->execute(array($pseudo, $password));

        if($recupUser->rowCount() > 0){
			$_SESSION['login'] = $pseudo;
			$_SESSION['passe'] = $password;
			$_SESSION['id'] = $recupUser->fetch()['id'];
		
			header('Location: connexion.php'); 
		}

	}else{
		echo " veuillez completer tous les champs...";
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/connexion.css">
	<title>creer utilisateur</title>
</head>
<body>
	 <form method="post" action="#" >
	 	<section>
	 	<h1>Creer Compte utilisateur</h1>
	 	<label>Nom Utilisateur</label>
	 	<input type="text" name="pseudo" placeholder="Nom utilisateur">
	 	<label>Mot de passe</label>
	 	<input type="password" name="password" placeholder="Mot de passe">
	 	<label> Confirmer le Mot de passe</label>
	 	<input type="password" name="conf_psswd" placeholder="Mot de passe">
	 	
	 	<input type="submit" name="CompteUser" value="ENVOYER" >
	 	<p>voulez vous vous connectez?<a href="Connexion.php"> Se Connecter</a> </p>
	 	</section>
	 </form>
</body>
</html>
