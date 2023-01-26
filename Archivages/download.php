<?php 

if(isset($_GET['nom']))
{
	$id = $_GET['nom'];
	$sql ="SELECT * FROM ' files' WHERE 'id'=$id";

	$result = mysqli_query ($con, $sql);

	$file = mysqli_fetch_assoc($result);

	$filepath = 'files/'.$file['nom'];

	if(file_exists($filepath))
	{
		header('Content-type: application/octet-stream');
		header('Content-Description: File Transfer');

		header("Content-Description : attachment; filename="basename($filepath));

		header('Expires: 0'); 

		header('Cache-Control : must-revalidate');

		header('Pragma:public');

		header('Content-Length:' .filesize('files/'.$file['nom']));

		readfile('files/'.$file['name']);

		$newCount =  $file['telecharger'] + 1;

		$updatQuery = "UPDATE ' files' SET 'telecharger ='$newCount WHERE 'id='$id";

		mysqli_query($con,$updatQuery);

		exit; 

	}

}










 ?>