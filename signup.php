<?php include 'header.php' ?>

<style>
.card-body{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 35%;
	color:#FFF;
	background-image:url(image/nature2.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	
	 margin: 0 auto; 
     float: none; 
     margin-bottom: 10px;
	
    

}
.card-body:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.2);
}



</style>

<!--Content-->
<br>
<div class="card-body">
<div id="signUpForm">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" align = "center" >
        <br><h4>First Name:</h4>
        <input type="text" name="first_name" title="Fname" placeholder="First name">
         <br>
        <br><h4>Last Name:</h4>
        <input type="text" name="last_name" title="Lname" placeholder="Last name">
        <br>
        <br><h4>Password:</h4>
        <input type="password" name="pass" title="pass" placeholder="Password">
        <br>
        <br><h4>User Name:</h4>
        <input type="text" name="username" title="username" placeholder="User Name">
        <br>
        <br><h4>Age: </h4>
        <input type="text" name="age" title="age" placeholder="Age">
        <br>
        <br><h4>Address:</h4>
        <textarea name="address" title="age" placeholder="Address"></textarea>
        <br>
        <br><h4>Phone Number:</h4>
         <input type="text" name="phone" title="Phone" placeholder="Phone Number"><br><br>
        <br>
        <div id="Type">
            <input type="checkbox" name="check_list[]" value="farmer"><label><b>Seller</b></label><br/>
            <input type="checkbox" name="check_list[]" value="buyer"><label><b>Buyer</b></label><br/>

        </div>


        <br><input type="submit" name="submit" value="Submit">
    </form>
</div>
</div>

<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $pass = $_POST['pass'];
    $user = $_POST['username'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $pnumber = $_POST['phone'];

    $insert = "INSERT INTO users VALUES ('{$fname}','{$lname}','{$pass}','{$user}','{$age}','{$address}','{$pnumber}')";
    $result = mysqli_query($connection, $insert) or die(mysqli_error());

    if ($result != null) {
        echo "<h1>Added data </h1>";
    }
    if (!empty($_POST['check_list'])) {
// Loop to store values of individual checked checkbox.

            foreach ($_POST['check_list'] as $selected) {
                echo $selected;
                if (strpos($selected, 'farmer') !== false) {
                    $insert = "INSERT INTO farmers VALUES (NULL ,'{$fname}','{$lname}','{$age}','{$address}','{$pnumber}')";
                    $result = mysqli_query($connection, $insert) or die(mysqli_error());
                } elseif (strpos($selected, 'buyer') !== false) {
                    $insert = "INSERT INTO customers VALUES (NULL ,'{$fname}','{$lname}','{$age}','{$address}','{$pnumber}')";
                    $result = mysqli_query($connection, $insert) or die(mysqli_error());
                }
            }

    }


};

?>

<?php include 'footer.php' ?>

