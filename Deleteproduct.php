<?php 
    include("DBconnect.php");
?>
<?php	
	if( isset($_POST['toyid']) ){ // To check if the attribute has been set (the attribute present and the value is not null or false), get variables 
    
    $sql = "DELETE FROM Toyproduct WHERE toyid = :toyid"; // run query delete record from Toyproduct where toyid= :id

    $stmt= $pdo->prepare($sql); // simply put your sql into PDO so it starts working
    $stmt->bindValue(':toyid', $_POST['toyid'], PDO::PARAM_INT);//use bindValue to bind the variable's value 
    $stmt->execute();// execute command 
    die("You've deleted the item '$toyid' <a href='admin.php'>click here</a> to continue."); // redirect to the admin page
}
?>