
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>archive</title>
	<link rel="stylesheet" type="text/css" href="css/Archivess.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="contenu.css">
</head>
<body>

	<div class="navbar">
			<a class="logo" href="#">
			<img src="dpsp.JPG">
			<span>DPSP-MIRAH</span></a> 
			<a href="#" class="icon">
				<img src="image/user.PNG" alt="user" class="user">
				<span><?php 
					session_start();
					if(!$_SESSION['passe']){
						header('Location: connexion.php');
					}
					echo $_SESSION['login'];

 				?></span>
			</a>
			
			<div class="nav-bar">
			<ul>
				<li> <a href="Archivage.php" class="a1"><img src="image/home.PNG" class="i">HOME</a></li> 
				<li> <a href="importer.php" class="a1"> <img src="image/doc1.PNG" class="i">UPLOADER UN FICHIER</a></li>
				<li> <a href="Archive.php" class="a1"><img src="image/manette.PNG" class="i">LISTES ARCHIVES</a></li>
				<li> <a href="#" class="a1"><img src="image/dossier.PNG" class="i">MATRICE DES SD</a></li>
				<li> <a href="#" class="a1"><img src="dpsp.JPG" class="i">information</a></li>
			</ul>
				
			</div>
			
			<img src="menu.PNG" alt="menu hemburger" class="menu-hamburger">
		</div>
	<header></header>
<script type="text/javascript">
	const menuHamburger = document.querySelector(".menu-hamburger")
        const nav_bar = document.querySelector(".nav-bar")
 
        menuHamburger.addEventListener('click',()=>{
        nav_bar.classList.toggle('mobile-menu')
        })
</script>
</body>
 <div class="contenu">
 	    <div class="ros">
 	    	<div class="col">
 	    		<h1>DPSP-MIRAH</h1>
 	    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 	    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 	    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 	    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 	    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 	    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 	    		<button>explorer</button>
 	    	</div>
 	    	<div class="col">
 	    		<div class="card card1">
 	    			 <h2>western</h2>

 	    			 <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 	    		quis nostrud exercitation ullamco  </p>

 	    		</div>
 	    		<div class="card card2">
 	    			 <h3>lornn</h3>

 	    			 <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 	    		quis nostrud exercitation ullamco  </p>

 	    		</div>
 	    		<div class="card card3">
 	    			 <h4>western of gen</h4> 

 	    			 <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 	    		quis nostrud exercitation ullamco  </p>

 	    		</div>
 	    		<div class="card card4">
 	    			 <h5>westeron off</h5>

 	    			 <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 	    		quis nostrud exercitation ullamco  </p>

 	    		</div>
 	    	</div>
 	    	
 	    	
 	    </div>
 </div>

<footer class="footer">
	<div class="container">

		 <div class="row"> 
		 	<div class="footer-col">
		 		<h4>compagny</h4>
		 		<ul>
		 			<li><a href="#">about us</a> </li>
		 			<li><a href="#">our service</a> </li>
		 			<li><a href="#">privacy policy</a> </li>
		 			<li><a href="#">afiliate program</a> </li>

		 		</ul>
		 	</div>
		 	<div class="footer-col">
		 		<h4>get help</h4>
		 		<ul>
		 			<li><a href="#">FAQ</a> </li>
		 			<li><a href="#">shipping</a> </li>
		 			<li><a href="#">returns</a> </li>
		 			<li><a href="#">ordr status</a> </li>
		 			<li><a href="#">payement options</a> </li>

		 		</ul>
		 	</div><div class="footer-col">
		 		<h4>coline shop </h4>
		 		<ul>
		 			<li><a href="#">watch</a> </li>
		 			<li><a href="#">bag</a> </li>
		 			<li><a href="#">shoes</a> </li>
		 			<li><a href="deconnexion.php">se deconnecte </a> </li>

		 		</ul>
		 	</div><div class="footer-col">
		 		<h4>follow us</h4>
		 		<div class="social -links">
		 			<a href="#"><img src="" alt="facebook"> </a>   
		 			<a href="#"><img src="" alt="twenter"> </a>   
		 			<a href="#"><img src="" alt="ni"> </a>   

		 		</div>
		 	</div>
		 </div>

	</div>
</footer>
</html>