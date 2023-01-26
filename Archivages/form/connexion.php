<?php 
class simpleCrud
{
    private $p;
    public function __construct($dbname,$host,$user,$password)
    {
     		
	    try {

				$this->p=new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$password);

			} catch (PDOException $error1) 
		    {
				echo 'erreur  de connexion....!'.$error1->getMessage();	
			}catch(Exception $error2){
				echo 'erreur genere';
			}

    }
    public function insertUser($pseudo,$password)
	{
		$insert=$this->p->prepare('INSERT INTO `user`( `pseudo`, `password`) VALUES (:p,:pa)');
		$insert->bindvalue(':p',$pseudo);
		$insert->bindvalue(':pa',$password);
		$insert->execute(); 
	}


}

?>