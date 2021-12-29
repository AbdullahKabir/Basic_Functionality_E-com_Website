<?php include 'header.php'; ?>

 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card-body {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 50%;
	background-color: #FFF;
	
	 margin: 0 auto; 
     float: none; 
     margin-bottom: 10px;
	
    

}

.card-body:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
	
}
</style>
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
    




<?php

$user = null;
if (!isset($_SESSION['user']))
    redirectUserToLog();
else
    $user = $_SESSION['user'];


?>
<form action="cart.php" method="post">
    <?php 


    if(isset($_POST['search']))
 {
 	$searchq= $_POST['search'];
  $searchq= preg_replace("#[^0-9a-z]#i","",$searchq);

  $sql= "SELECT * FROM products WHERE NAME LIKE ('%$searchq%')";
         
   
 $result= mysqli_query($connection, $sql);
 while($row=mysqli_fetch_assoc($result))
 {
 
        $image_OUT = "<div class = card-body  ";
        $image_OUT .= "product";
        $image_OUT .= "><div id= ";
        $image_OUT .= "pro_image";
        $image_OUT .= "><img src='data:image/jpeg;base64,{$row["PICTURE"]}'  ></div>";
	 


        echo $image_OUT;
		
        $Des_OUT = "<div id= ";
        $Des_OUT .= "description";
        $Des_OUT .= "><br> 
            <p>ID: {$row["PRODUCT_ID"]}</p> 
			<p>Name: {$row["NAME"]}</p>
		 	<p>DESCRIPTION :{$row["DESCRIPTION"]}</p> 
		 	<p>PRODUCTION DATE:{$row["PRO_DATE"]}</p> 
		 	<p>EXPIRITY DATE: {$row["EXP_DATE"]}</p> 
		 	<p>PRICE: {$row["PRICE"]} Per kg </p> <br></div></div>";
			
			 echo $Des_OUT;

 
 }

 }

else {
	$query = 'SELECT * FROM products';
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {

        $image_OUT = "<div class = card-body  "  ;
        $image_OUT .= "product";
        $image_OUT .= "><div id= ";
        $image_OUT .= "pro_image";
        $image_OUT .= "><img src='data:image/jpeg;base64,{$row["PICTURE"]}'  > </div>";

        echo $image_OUT;
	
		
        $Des_OUT = "<div id= ";
        $Des_OUT .= "description";
        $Des_OUT .= "><br> 
            <p>ID: {$row["PRODUCT_ID"]}</p> 
			<p>Name: {$row["NAME"]}</p>
		 	<p>DESCRIPTION :{$row["DESCRIPTION"]}</p> 
		 	<p>PRODUCTION DATE:{$row["PRO_DATE"]}</p> 
		 	<p>EXPIRITY DATE: {$row["EXP_DATE"]}</p> 
		 	<p>PRICE: {$row["PRICE"]} Per kg </p> <br></div></div>";
		


        echo $Des_OUT;

    }
}

    ?>

  
</form>

<?php include 'footer.php' ?>
