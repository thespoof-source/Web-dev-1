<?php 
session_start();

if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>
<!DOCTYPE html>
<head>
    <titile></titile>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
    <h2 class="text-center text-success">Welcome in my Ecommerce Website<?php echo $_SESSION['username'];
    ?></h2>
    <a href="logout.php">LOGOUT</a>
    </div>
</body>