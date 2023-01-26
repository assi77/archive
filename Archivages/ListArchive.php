<?php 

if ($_GET['Search']) 
{
    // code...


}else
{
    $query ="SELECT * FROM `files` ";
    $Search_resultat = tablerecherche($query);
}

function tablerecherche($query)
{
    $con=  mysqli_connect( $host = 'localhost', $user = 'root', $password = '',$data='file_upload');

    $filter_resultat = mysqli_query($con, $query);
    return $filter_resultat;
}

 ?>