<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>To do List</title>

</head>
<body>

	<h2> Some Information !!! </h2>
	<table>
	<tr>

				<td>Name</td>

				<td><input type="text"  id="Name"></td>
	</tr>
	<tr>
				<td>Country</td>
				<td>

					<select name="country">

						<option value="Viet">Viet</option>

						<option value="Malaysia">Malaysia</option>

						<option value="UEA">UAE</option>
						<option value="UEA">UK</option>
						<option value="Korean">Korean</option>
						<option value="China">China</option>
						<option value="Canada">Canada</option>


					</select>
				</td>



	</tr>
	<tr>

				<td colspan="2">

					<h1 style="margin-left: 25%;"><button type="submit" onclick="userSubmit()" name="add" >Ok</button></h1>

				</td>	

	</tr>

	</table>


	<ol id="inputList"></ol>

		<h4>Thank you for your efforts!</h4>


		


<script>

		function userSubmit(){

			//if no error, it will show the confirmation

				confirmation();

			

		}

		function confirmation()
		{

			var isValid = true;

			var Name = document.getElementById("Name").value;
			var inputList = document.getElementById('inputList');

			var node = document.createElement("li");

			var textnode = document.createTextNode(Name);
			node.appendChild(textnode);
			inputList.appendChild(node);
		}
</script>
	


</body>
</html>