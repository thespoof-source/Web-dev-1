<?php 

//connect connection
$con = mysqli_connect('localhost','root','');
if($con){
    echo "connection succesfull";
}else {
    echo "no connection";
}
?>