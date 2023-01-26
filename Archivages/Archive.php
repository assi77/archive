
<!DOCTYPE html>
<html>
<?php 

if (isset($_POST['search'])) 
{
    
$valueTosearch = $_POST['valueTosearch'];
$query="SELECT * FROM `files` WHERE CONCAT( 'id',`nom`, `size`, `telecharger`)LIKE'%.$valueTosearch.%'";

$search_resultat= tablerecherche($query);

}else
{
    $query ="SELECT * FROM `files` ";
    $search_resultat = tablerecherche($query);
}

function tablerecherche($query)
{
    $con=  mysqli_connect( $host = 'localhost', $user = 'root', $password = '',$data='file_upload');

    $filter_resultat = mysqli_query($con, $query);
    return $filter_resultat;
}


 ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>archive</title>
	<link rel="stylesheet" type="text/css" href="css/Archivess.css">
	<link rel="stylesheet" type="text/css" href="css/ListArchivess.css">
</head>
<body>
	<div class="navbar">
			<a class="logo" href="#">
			<img src="dpsp.JPG">
			<span>DPSP-MIRAH</span></a> 
			<a href="#" class="icon">
				<img src="image/user.PNG" alt="user" class="user">
			</a>
			
			<div class="nav-bar">
			<ul>
				<li> <a href="Archivage.php" class="a1"><img src="image/home.PNG" class="i">HOME</a></li> 
				<li> <a href="importer.php" class="a1"> <img src="image/doc1.PNG" class="i">UPLOADER UN FICHIER</a></li>
				<li> <a href="Archive.php" class="a1"><img src="image/manette.PNG" class="i">LISTES ARCHIVES</a></li>
				<li> <a href="#" class="a1"><img src="image/dossier.PNG" class="i">MATRICE DES SD</a></li>
				<li> <a href="#" class="a1"><img src="dpsp.JPG" class="i">A PROPOS</a></li>
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
<div class="rows">
	<form method="post" action="Archive.php">
		<input type="text"  name="valueTosearch" placeholder="Rechercher">
		<input type="submit" name="search" value="Rechercher">
		<table>
		<tr>
			<th>IMAGE</th>
			<th>FILE NAME</th>
			<th>SIZE(IN MB)</th>
			<th>DOWNLOAD</th>
			<th>ACTION</th>

		
		</tr>

		<?php while ($row = mysqli_fetch_array($search_resultat )): ?>

			<tr>
				<td><img src="image/doc1.png"><id>
				<td><a href="telecharger.php?file=<?php echo $row['nom'] ; ?>"><?php echo $row['nom'] ; ?></a></td>
				<td><?php echo $row['size'] /10000000," ",'KB'; ?></td>
				<td><?php echo $row['telecharger'] ; ?></td>
				<td>
					<a href="telecharger.php?file=<?php echo $row['nom'] ; ?>">Download</a>
					</td>
			</tr>
		<?php endwhile ?>
	</table>
	 
	</form>
		
</div>

</body>
</html>