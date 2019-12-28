<?php 
    include("DBconnect.php");    
?>
<?php
	if(isset($_POST['toyid'], $_POST['toyname'], $_POST['image'], $_POST['price'], $_POST['catid']))
	{
	    $sql = "UPDATE Toyproduct SET toyid = :toyid, toyname = :toyname, image = :image, price = :price, catid = :catid WHERE toyid = :toyid";
	    
	    $stmt = $pdo->prepare($sql);
	    $stmt->bindValue(':toyid', $_POST['toyid'], PDO::PARAM_INT);
	    $stmt->bindValue(':toyname', $_POST['toyname'], PDO::PARAM_STR);
	    
	    $stmt->bindValue(':image', $_POST['image'], PDO::PARAM_STR);
	    $stmt->bindValue(':price', $_POST['price'], PDO::PARAM_STR);
	    $stmt->bindValue(':catid', $_POST['catid'], PDO::PARAM_STR);
	    $pdoExec = $stmt->execute();
	    
	        // check 
	    if($pdoExec)
	    {
	        die("You've updated the Item '$catid' <a href='admin.php'>click here</a> to continue.");
	    }else{
	        echo 'Data Not updated';
	    }
	}
	
?>