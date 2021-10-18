<title>user login page</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style> 
    @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');  
body{
    background: linear-gradient(rgba(0,0,50,0.5)rgba(0,0,50,0.5));
    background-image: url(img4.jpg);
    background-size: cover;
    background-position: center;
    font-family: "Fredoka One";
    color:black;
}
.Login-box{
    max-width: 1100px;
    float:none;
    margin: 150px auto;
}
/*.login-left{
    background: rgba(211,211,211,0.5);
    padding:30px;
}*/
.login-right{
    background: #fff;
    padding:30px;
}
.form-control{
    background-color: transparent !important;
}

</style>
</head>
<body>

<div class="container">
<div class="Login-box">
<div class="row">
<center>
    <div class="col-md-6 login-left">
       <h2>Log in </h2>
        <form action="validation.php" method="post">
<div class="form-group">
    <label>Username</label>
    <input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Login </button>
        </form>
    </div>
   
    
</center>
    </div>
</div>

</div>
</div>



</body>
</html>
