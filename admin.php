<!DOCTYPE html>
<html>
<head>
	<title>Admin Management</title>
	<link rel="stylesheet" href="./StylesheetATN.css">

	
		
</head>
<body style="background-color: #E9E7E7">
	<?php
	require_once ("./DBconnect.php");
	?>
	
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
	
	
		<table border="2" cellspacing="1"  width="1000" height="1000" style="margin-left: 15%">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Image</th>
				<th>Price</th>
				<th>CatId</th>
				 <th colspan="2">Action</th>
			</tr>
			
	
      
            <?php
                $sql = "SELECT Toyid, ToyName, Image, Price, CatId FROM Toyproduct";
                $stmt = $pdo->prepare($sql);        
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
                {
                    $Toyid = $row['toyid'];
                    $ToyName = $row['toyname'];
                    $Image = $row['image'];
                    $Price = $row['price'];
                    $CatId = $row['catid'];
                   
                    $link_image = "./images/$Image";             
                    echo "<tr>";
                    echo "<td>$Toyid</td>";                
            ?>
            <form action="updateitem.php" method="post">

                  <input type="hidden" name="toyid" value="<?php echo $row['toyid'] ?>" />
                <td><input type="text" size="5" name="toyname" required value="<?php echo $row['toyname']; ?>"/></td>          
                
                
                <?php echo "<td ><img src='$link_image' width='150px'></td>"; ?>
                
                <td><input type="text" size="5" name="price" required value="<?php echo $row['price']; ?>"/></td>
                
                <td><input type="text" size="5" name="catid" required value="<?php echo $row['catid']; ?>"/></td>
                
                
            
              

                <td><input type="submit" value="Update" /></td>
            </form>    
                <td>
                    <form class="frminline" action="Deleteproduct.php" method="post" onsubmit="return confirmDelete();">
                        <input type="hidden" name="toyid" value="<?php echo $row['toyid'] ?>" />
                        <input type="submit" value="Delete" />
                    </form>
                    
                </td>

                <?php
                echo "</tr>";
            }
            ?>
            <script>
                function confirmDelete() { //The ConfirmDelete () function displays a dialog box with a specified message, along with the OK button and the Cancel button.
                    var r = confirm("Are you really want to delete this product?"); // Confirm () returns true if the user clicks "OK" and  false otherwise. 
                    if (r) {
                        return true;
                    } else {
                        return false;
                    }
                }
            </script>

        </table>  

   
    <h2><a style="color:#100D0D; font-size :20px; margin-left :15%;" href="./AddATN.php">Add new product</a></h2>


</body>
</html>