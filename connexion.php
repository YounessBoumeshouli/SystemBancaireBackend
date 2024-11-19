<?php 

$con = mysqli_connect("localhost","root","",database: "banksys");
if($con){
    echo"you're connected";
}else{
    echo"you're not";
}


?>



