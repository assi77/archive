<!DOCTYPE html>

<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>importer les documments</title>
	<link rel="stylesheet" type="text/css" href="css/importer.css">
</head>
<body>
	<div class="uploader">
		<header>File Uploder</header>
		<div class="uploadfile">
			<img src="image/upload.png">
			<p>importer les documents</p>
			
		</div>
		<form action="importer.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<input type="file" name="file">
			</div>
			<button type="submit" name="save">ENVOYER</button><br/>

			<p><?php include 'css/upload.php'; ?></p>
		</form>
		
	</div>	
</body>
</html>