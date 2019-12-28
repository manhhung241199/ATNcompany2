<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
<link rel="stylesheet" href="./StylesheetATN.css">
</head>
<body >
	<?php
	require_once("./DBconnect.php")
	?> 
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
			<li><a href="Assignment2.html">Home</a></li>
			<li><a href="ATNDo.php">Shop</a></li>
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
			
		</ul>
	</div>
<div class="third">
<?php
$sql = "SELECT * FROM Toyproduct";
$stmt = $pdo->prepare($sql);
//execute the query on the server and return the result set
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$resultSet = $stmt->fetchAll();
//display the data
?>

	<table>
	<?php
		foreach ($resultSet as $row) {
			echo "<li>" .
				 $row["toyname"] . '--'. $row["image"]. '--'. $row["price"]. "</li>";
		}
	?>
</table>

	</div>
</div>
</div>


</body>
</html>