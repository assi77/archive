<?php

$serveur="localhost";
 $user="root";
 $pass="";
 $dbname="connexion";

$sdn="mysql:host =".$serveur .";dbname =".$dbname .";charset=utf8;";
 
try{
    $PDOConnection = new PDO ($sdn, $user, $pass);

}catch(PDOexeption $e){
    die("connexion Error :". $e->getMassage());
}

?>