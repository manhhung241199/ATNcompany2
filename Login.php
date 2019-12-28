<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="./StylesheetATN.css">
</head>
<body style="background-color: #E9E7E7">
	<?php
	require_once ("./DBconnect.php");
	?>
	<table  class="table" cellpadding="10" cellspacing="10" width="100%" height="60">
		<tr>
			<td>
				<img src="./images/ATN.jpg" alt="ATN" style="width:170px;height:100px;margin-right:15px;"></td>	
		
			<td><a href=""><input type="text" placeholder="search..." name="search" class="search-box"></a></td>
		
	<div class = "login">
		<ul>
			<li><a href="Login.php">Login</a></li>
		</ul>
	</div>

</td></tr></table>
		<div class="hnav">
		<ul>
			<li><a href="Assignment2.html">Home</a></li>
			<li><a href="">Shop</a></li>
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
			
		</ul>
	</div>
	<br>
	<br>
	<br>
	
		
	<center>
		 <form method="POST" action="login.php" >
        <table style=" background-color : pink; text-align: center" height ="300" width="400">
        	<tr>
				<td colspan="2"><u style="font-size: : 200%;">YOUR ACOUNT FOR EVERYTHING ATN TOYS</u></td>

			</tr>
            <tr>
		<td width="150">Username:</td>
		<td width="250"><input type="name" name="username"><br></td>
	</tr>
	<tr>
		<td width="150">Password:</td>
		<td width="250"><input type="password" name="password"><br></td>
	</tr>
	<tr>
    	<td align="center" colspan="2"><input type ="submit" value="Log In">

		</td>
	</tr>
        </table>
    </form>
</center>
		</div>
	</div>
		
	



</body>
</html>