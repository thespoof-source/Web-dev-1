<?php 
session_start();

//connect connection
$con = mysqli_connect('localhost','root','');
if($con){
    echo "connection succesfull";
}else {
    echo "no connection";
}
//database connect
mysqli_select_db($con,'project1');
//acces
$name= $_POST['user'];
$password=$_POST['password'];
$email=$_POST['email'];
$number=$_POST['number'];


//for no same password and username
$q= "select *from signin where  name='$name' && password = '$password' ";
$result = mysqli_query($con,$q);
//its check the number of character
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
header('location:home.php');
}else {
    header('location:login.php');
}


?>