<?php  


/*$conn = mysqli_connect("localhost,root","","file_upload");*/
$con=  mysqli_connect( $host = 'localhost', $user = 'root', $password = '',$data='file_upload');


$sql="SELECT * FROM `files`";
$resultat = mysqli_query($con,$sql);
$files = mysqli_fetch_all($resultat, MYSQLI_ASSOC);


if(isset($_POST['save']))
{
	$filename = $_FILES['file']['name'];

	$destination = 'files/'.$filename;

	$extension = pathinfo($filename,PATHINFO_EXTENSION);

	$file =$_FILES['file']['tmp_name'];

	$size = $_FILES['file']['size'];

	if(!in_array($extension, ['zip','pdf','png','docx','txt','xlsx']))
	{
		echo 'seul les ficher .zip, .pdf, .docx, .txt, .png, .xlsx';

	}elseif($_FILES['file']['size']>10000*1024)
	{
		echo "ficher trop long";
	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql="INSERT INTO `files`( `nom`, `size`, `telecharger`) VALUES ('$filename','$size',0)";
			     if(mysqli_query($con ,$sql))
			     {
			     	echo "ficher importer avec succes...";
			     }else{
			     	echo "fichier echec !!!";
			     }
		}
	}
}






 ?>