<?php

 session_start();
?>
<!doctype html>
<html lang="en">
<head>
<title>Register</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
<?php
include "db_con.php";
  if(isset($_POST['submit'])){
	  $name = mysqli_real_escape_string($con, $_POST['name']);
	  $email = mysqli_real_escape_string($con, $_POST['email']);
	  $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	  $password = mysqli_real_escape_string($con, $_POST['password']);
	  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
	  $addr = mysqli_real_escape_string($con, $_POST['addr']);
	  
	  $pass = password_hash($password, PASSWORD_BCRYPT);
	  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
	  
	  $q = "select * from register where email = '$email'";
	  $result = mysqli_query($con, $q);
	   
	  $num = mysqli_num_rows($result);
	  
	   if($num>0){
		   echo "Email already exist";
	   }else{
		   if($password === $cpassword){
			   
			   $insertquery = "insert into register(UserName, Email, Contact, Password, ConfirmPassword, Address) VALUES ('$name', '$email', '$mobile', '$pass', '$cpass', '$addr')";
			    $iquery = mysqli_query($con, $insertquery);
				//Check insert query
				
				 if($iquery){
	                 ?>
	                <script>
	                   alert("Inserted Successful");
                         </script>
	                         <?php
                  }else{
	                     echo "Insertedd not successful".mysqli_error($con);
				  }
				
			

		   }else{
			   echo "Password do not match";
		   }
	   }
     
}


?>
 
 <div class="row">
    <div class="col-xs-12 panel-heading">
	    <h1 class="col-xs-offset-5">Create Account</h1>
	   </div>
 <div class="container">
         <form  action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" class="form-horizontal">
 				               <div class="form-group has-warning has-feedback">
                                    <label class="col-xs-3 control-label" for="nme"> Name</label>
							             <div class="col-xs-6">
							           <div class="input-group">
							        <span class="input-group-addon AddGroup">
							     <span class="glyphicon glyphicon-user"></span>
							           </span>
							                <input type="text" required  name="name" class="form-control" id="nme" placeholder="Name"/>
								 </div>							  
					        </div>
                       </div>
					        <div class="form-group has-warning has-feedback">
                                  <label class="col-xs-3 control-label" for="eml"> Email</label>
							            <div class="col-xs-6">
							           <div class="input-group">
							        <span class="input-group-addon AddGroup">
							     <span class="glyphicon glyphicon-envelope"></span>
							          </span>
							               <input type="email" required name="email" class="form-control inpl" id="eml" placeholder="Email"/>
								 </div>							  
					          </div>
                       </div>
			
					          <div class="form-group has-warning has-feedback">
                                    <label class="col-xs-3 control-label" for="nmb"> Contact No.</label>
							              <div class="col-xs-6">
							            <div class="input-group">
							          <span class="input-group-addon AddGroup">
							       <span class="glyphicon glyphicon-phone"></span>
							           </span>
							            <input type="number" required name="mobile" class="form-control" id="nmb" placeholder="Number"/>
								 </div>							  
					         </div>
                       </div>
					   
					    
					          <div class="form-group has-warning has-feedback">
                                     <label class="col-xs-3 control-label" for="pwd"> Password</label>
							             <div class="col-xs-6">
							                <div class="input-group">
							             <span class="input-group-addon AddGroup">
							         <span class="glyphicon glyphicon-lock"></span>
							               </span>
							      <input type="password" required name="password" class="form-control" id="pwd" placeholder="password"/>
								 </div>							  
					        </div>
                       </div>
					   
					   
					          <div class="form-group has-warning has-feedback">
                                    <label class="col-xs-3 control-label" for="cpwd"> Confirm Password</label>
							            <div class="col-xs-6">
							          <div class="input-group">
							       <span class="input-group-addon AddGroup">
							          <span class="glyphicon glyphicon-lock"></span>
							              </span>
							      <input type="password" required name="cpassword" class="form-control" id="cpwd" placeholder="Confirm password"/>
								 </div>							  
					        </div>
                       </div>
					  
					   	          <div class="form-group has-warning has-feedback">
                                       <label class="col-xs-3 control-label" for="addr"> Address</label>
							               <div class="col-xs-6">
							                  <div class="input-group">
							             <span class="input-group-addon AddGroup">
							         <span class="glyphicon glyphicon-list"></span>
							              </span>
							           <textarea class="form-control" name="addr" placeholder="Address" id="addr" rows="3">
                                 </textarea>
								 </div>							  
					        </div>
                       </div>
					    
					   <div class="col-xs-12">
					   <center>
					   <button type="submit" name="submit" class="btn-primary" style="height:45px;width:200px;text-align:center;
					   border-radius:10px;font-size:25px;">Submit</button>
					    </center>
					   </div>
					   
   </form>
   </div>
   </div>
  
</body>
</html>