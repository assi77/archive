  <?php 

if(!empty($_GET['file'])){
	$filename = basename($_GET['file']);
	$filePath = "files/".$filename;

	if(!empty($filename) && file_exists($filePath)){

		 header("Cache-Control : public");
		 header("Content-Description: File Transfer");
		 header("Content-Disposition: attachment; filename=$filepath");
		 header("Content-type: application/zip");

		header("Content-Transfer-Encoding: binary"); 

		readfile($filePath);

		exit; 
		
     
	}else{
		echo " Erreur de telechargement";
	}
}




 ?>