<?php

require('config.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>view data</title>
	<link rel="stylesheet" type="text/css" href="../css/assigment.css">
</head>
<body style="background-image: url('../images/salon1.jpg'); background-repeat: no-repeat;background-size: 100%">
	
	<br><br><br><br><center>
<table style = "border-collapse:collapse; background-color: #d9d9d9; bodercolor:black" border = "5px" width = "70%" class="vtable">
	<tr style="background-color: #b3b3b3">
		<th>ID no</th>
		<th>Rate value</th>
		<th>User idea</th>
	</tr>

	<?php

		$sql = "select * from rating";
		$result = $conn->query($sql);

		if($result->num_rows > 0){

			while($row = $result->fetch_assoc()){

				echo"<tr><td><center>".$row["id"]."</center></td><td><center>".$row["rate"]."</center></td><td><center>".$row["descrip"]."</center></td></tr>";
		}
	}

		else{
		echo"0 results";
	}
		echo"</table>";
		$conn->close();
	?>
	<a href="deleterating.php">delete table data</a>
	</center>

</body>
</html>