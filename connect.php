<?php

$con=new mysqli('localhost', 'root','', 'crudinphp');

// if($con){
//     echo "Connection Successfull";
// }
// else{
//     die(mysqli_error($con));
// }

if(!$con){
    die(mysqli_error($con));
}

?>  