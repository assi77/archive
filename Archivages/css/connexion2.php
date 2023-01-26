<?php 

if(isset($_POST['CompteUser']))
{

require 'text.php';

$username = $_POST['pseudo'];
$pass = $_POST['psswd'];
$conf_pass = $_POST['conf_psswd'];

  if(empty($username) && empty($pass) && empty($conf_pass)){

    header("Location:../compteUser.php?error=emptyfild");
    exit();
  }

     elseif(!preg_match("/^[a-zA-z0-9]*$/", $username)){
      header("Location:../compteUser.php?error=usernamebroken");
    exit(); 
     }
 


      elseif($pass !== $conf_pass){
      header("Location:../compteUser.php?error=passwortchekwrong");
    exit(); 
     }

     else{
       $sql= "SELECT 'connexion' FROM 'user' WHERE 'pseudo'= ;user"; 
       if(!$stmt = $PDOConnection->prepare($sql)){
        header("Location:../compteUser.php?error=databaseconectionfailed");
    exit();  

       } else{

        $stmt = $PDOConnection->prepare($sql);
        $stmt->bindparam(':pseudo',$user);
        $stmt->execute();

        $numberOfresult = $stmt->RowCount();
         if($numberOfresult > 0) {

           header("Location:../compteUser.php?error=usernametaken");
           exit();

         
         }

         if($numberOfresult == 0){

          $sql ="INSERT INTO `user`( `pseudo`, `password`) VALUES(':username', ':hashedpass')";

           if(!$stmt = $PDOConnection->prepare($sql)){
        header("Location:../compteUser.php?error=databaseconectionfailed2");
    exit();  
         }else{

              $hashedpass = password_hash($pass, PASSWORD_DEFAULT); 


              $stmt = $PDOConnection->prepare($sql);
               $stmt->bindParam(':pseudo',$user);
               $stmt->bindParam(':hashedpassword',$pass );

               header("Location:../Archivage.php?compteUser=succes");
               $stmt->execute();
         }


       }
     }     


   }  
}



  
 ?>