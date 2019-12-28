
        
   
<!DOCTYPE html>

<html>

    <head>
    	<link rel="stylesheet" href="./StylesheetATN.css">

        <title>Add Product ATN </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
    	<br>
	<table  class="table" cellpadding="10" cellspacing="10" width="100%" height="60">
		<tr>
			<td>
				<img src="./images/ATN.jpg" alt="ATN" style="width:170px;height:100px;margin-right:15px;"></td>	
		
			<td><a href=""><input type="text" placeholder="search..." name="search" class="search-box"></a></td>
		
	<div class = "login">
		<ul>
			<li><a href="admin.php">Login</a></li>
		</ul>
	</div>

	</td></tr></table>
	<div class="hnav">
		<ul>
			<li><a href="Assignment2.php">Home</a></li>
			<li><a href="ATNDo.php">Shop</a></li>
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
			
		</ul>
		<br>
	<div class="hnav">
		<ul>
			<li><a href="">Category</a></li>
			<li><a href="">Product</a></li>
			<li><a href="">Account</a></li>
		</ul>
	</div>
	<br> 
    	<?php
require_once './DBconnect.php';
if(isset($_POST['toyid'], $_POST['toyname'], $_POST['image'], $_POST['price'], $_POST['catid']))
{
    $image = "";
    $extension = "";
    
    if (isset($_FILES['image']) && $_FILES['image']['size'] != 0) {
        $temp_name = $_FILES['image']['tmp_name'];
        $name = $_FILES['image']['name'];
        $parts = explode(".", $name);
        $lastIndex = count($parts) - 1;
        $extension = $parts[$lastIndex];
        $image = "$toyid.$extension";
        $destination = "./images/$image";
        //Move the file from temp loc => to our image folder
        move_uploaded_file($temp_name, $destination);
    }
    
   
    
        
    // mysql query to insert data
    $sql = "INSERT INTO Toyproduct (toyid, toyname, image, price, catid ) 
                    values (:toyid, :toyname, :image, :price, :catid)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':toyid', $_POST['toyid'], PDO::PARAM_STR);
    $stmt->bindValue(':toyname', $_POST['toyname'], PDO::PARAM_STR);
    $stmt->bindValue(':image', $_POST['image'], PDO::PARAM_STR);
    $stmt->bindValue(':price', $_POST['price'], PDO::PARAM_STR);
    $stmt->bindValue(':catid', $_POST['catid'], PDO::PARAM_STR);
  
   
    $pdoExec = $stmt->execute();// execute 
    
        // check if mysql insert query successful
    if($pdoExec)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }
}
?> 
<center><h2>Add New Product <3 </h2></center>

       <center> <form action="AddATN.php" method="post">

         Toyid :   <input type="text" name="toyid" required placeholder="Toyid"><br><br>

         ToyName:   <input type="text" name="toyname" required placeholder="ToyName"><br><br>

           Image :  <input type="text" name="image" required placeholder="Image"><br><br>

            Price : <input type="number" name="price" required placeholder="Price"><br><br>

             CatId : <input type="number" name="catid" required placeholder="CatId"><br><br>



            <input type="submit" value="Add new product">

        </form></center>
          <h2><a style="color:#100D0D; font-size :20px; margin-left :15%;" href="./admin.php">Back to Admin</a></h2>

    </body>

</html>