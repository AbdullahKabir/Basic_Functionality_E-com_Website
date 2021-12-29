<?php include 'header.php' ?>

<style>
.card-body {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 35%;
	//background-color:#06F;
	background-image:url(image/nature7.jpg);
	
	 margin: 0 auto; 
     float: none; 
     margin-bottom: 10px;
	 color:#FFF;
	 
	
	
    

}
.card-body:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.2);
}



</style>
<br></br>
<?php
$phone = null;

$error = null;

if (isset($_POST['submit'])) {
    $phone = ($_POST['uname']);
    $pass = ($_POST['psw']);

    if ($phone == null) {
        $phone .= "Enter Your Phone Number: <br>";
    }
    if ($pass == null) {
        $error .= "Enter Your Password<br>";
    }

    if ($error == null) {
        $user_found = checkUser($phone, $pass);

        if ($user_found == false) {
            $error .= "Incorrect Phone Number or Password<br>";
            logOutUser();
        } else {
            $error .= "User Found! Phone Number: " . $user_found['phone'] . "<br>";

            setAsLoggedIn($user_found['name'], $phone);

            $userType = checkIfUserIsFarmer($phone);
            if ($userType) {
                $_SESSION['name'] = 'farmer';
            } else {
                $_SESSION['name'] = 'buyer';
            }
        }
    }
}

if ($error != null) {
    echo "<h1 style='color: #f44336;'>" . $error . "</h1>";
}

?>
   
    <?php

          if (isLoggedIn()) {
               if (!strcmp($_SESSION['name'], "farmer")) {
               $upload ="<a href='upload.php' class='btn btn-primary' style='margin-left:45%'><span>Upload Product</span></a><br>";
                echo $upload;
                } else {

                }

           $upload1 = "<br><a href='CartToShow.php' class='btn btn-primary' style='margin-left:46%' ><span>Buy Product</span></a>";
            echo $upload1;
            }


            ?>
           
    

    <div id="form" align = "center">
        <form action="login.php" method="POST"  >
            
           <br> <div class="card-body">
                <label><b>Phone:</b></label><br>
                <input type="text" placeholder="Enter Phone Number" name="uname" required><br>
                <br>
               <label><b>Password:</b></label><br>
               <input type="password" placeholder="Enter Password" name="psw" required>

              <br> <br> <button type="submit" name="submit" class="btn btn-success">Login</button>
            <a href="signup.php" class="btn btn-success" role="button">Sign Up</a>
               <br> <input type="checkbox" checked="checked" ><b>  Remember me </b>
            </div>

        </form>
        
         
        
    </div>

<?php include 'footer.php' ?>
