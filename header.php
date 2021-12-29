<?php
session_start();
require_once "function.php";
require_once "dbconnect.php";
?>


<style>
 body 
 {
   background-image: url("image/background1.jpg");  
   background-size:cover;
  
   
   
 } 
 
 .card-header{
	 background-image:url(image/header2.jpg);
	 background-size:cover;
	 color: #FFF;
	 
	
	 
	 }
 
 

</style>

<!DOCTYPE html>
<html lang="en">
<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  <div class = "card-header" >
     <br><br>
     <h1><b> <i>Welcome To TatkaShobji.com </i> </b></h1>
     <br>
  </div>
  
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark" draggable="true" >
  <a class="navbar-brand" href="index.php">TatkaShobji.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
    <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="LogIn.php">Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signout.php">Log Out</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    
   <form method='post' action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="txt" name= search placeholder="Search">
<input type='submit' value=">>">
</form>

  </div>
</nav>

 

</body>
</html>
