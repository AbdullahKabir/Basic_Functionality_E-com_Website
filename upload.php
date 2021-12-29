<?php include 'header.php' ?>

<style>
.card-body{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 35%;
	
	//background-color: #000;
	color:#FFF;
	background-image:url(image/upload3.jpg);
	background-size:cover;
	background-repeat:no-repeat;
	
	
	
	
	 margin: 0 auto; 
     float: none; 
     margin-bottom: 10px;
	
    

}
.card-body:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.2);
}



</style>

    <div id='cssmenu' >
       
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
        </ul>
    </div>

    <!--Content-->

  <br>  <div class = "card-body">
    <div id="Upload">
        <h2>Please Fill up the form to complete your upload</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data" align = "center">
            File:
            <input type="file" name="pic" ><br>
            <br>Name:
            <br><textarea name="name" title="name" placeholder="Product Name"></textarea>

            <br>Despriction:
            <br><textarea name="description" title="Description" placeholder="Description"></textarea>
            <br>Production Date:
            <br><input type="date" name="p_date" title="p_date" placeholder="YYYY-MM-DD"></textarea>
            <br>Expire Date:
            <br><input type="date" name="ex_date" title="ex_date" placeholder="YYYY-MM-DD"></textarea>
            <br>Price:
            <br><textarea name="price" title="price" placeholder="Price"></textarea>


            <br><input type="submit" value="upload">
        </form>
    </div>
    </div>


<?php


if (isset($_FILES['pic'])) {
    $name = $_POST['name'];
    $fileDes = $_POST['description'];
    $p_date = $_POST['p_date'];
    $ex_date = $_POST['ex_date'];
    $price = $_POST['price'];


    $file = $_FILES['pic'];
    if (!isset($file))
        echo "Please select an image";
    else {
        $image = file_get_contents($_FILES['pic']['tmp_name']);
        $imageName = $_FILES['pic']['name'];
        $imageSize = getimagesize($_FILES['pic']['tmp_name']);

        if ($imageSize == FALSE)
            echo "That's Not An image";
        else {
            $img_base64 = base64_encode($image);
            if (!$insert = mysqli_query($connection, "INSERT INTO products VALUES (null,'{$name}','{$fileDes}','{$p_date}','{$ex_date}','{$img_base64}','{$price}')")) {
                echo "Problem Uploading";
            } else {
                $lastid = mysqli_insert_id($connection);
                echo '<br>';
                echo $lastid;

                $query = 'SELECT * FROM products where id=' . $lastid;
                $result = mysqli_query($connection, $query);
                if ($result == FALSE)
                    echo "Upload complete";
                else {
                    echo "No Result";
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<img src='data:image/jpeg;base64,{$row["PICTURE"]}' >";
                        echo "<br> <p>{$row["id"]}</p> <br>";
                    }
                }
            }
        }
    }
}

?>

<?php include 'footer.php' ?>