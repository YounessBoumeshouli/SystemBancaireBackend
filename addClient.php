<?php
include("connexion.php");


$query = "INSERT INto client (nom,prenom,genre,datenaissance,nationalite) Values('Youness','Boumess',1,'2003-01-20','maroccain')";

if($result = mysqli_query($con,$query)){
echo "data is insered";
}


?>