<?php
	include_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Appointment List</title>
	
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<script src = "../javascript/frmScript.js"></script>
	<style>
		body {
		  background-color: black;
		}
	</style>
</head>
<body>



<h2 style="color:white;"><center>Appointment Details</center></h2><br>
<table border=1 bgcolor="#FFDFD3" align="center" width="70%">
	<tr>
	<th>app_id</th>
	<th>Cus_Name</th>
	<th>Cus_Email</th>
	<th>App_Date</th>
	<th>App_Time</th>
	<th>No_Of_People</th>
	</tr>

<?php
	$sql= "SELECT * FROM Appointment";
	$result = $con->query($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo"<tr><td>".$row["app_id"]."</td><td>".$row["Cus_Name"]."</td><td>".$row["Cus_Email"]."</td><td>".$row["App_Date"]."</td><td>".$row["App_Time"]."</td><td>".$row["No_Of_People"]."</td></tr>";
		}
	}
	else
	{
		echo" No Results";
	}
	echo"</table>";
	
	$con->close();
?>








<footer>



    <!--footer-->
    <hr id="test"/>

	<br/>
    <h4 style="color:white;">Contact No: 0712309845 / 0112577832</h4>
    <h4 style="color:white;">email: blossom12@gmail.com</h4>
    <h5 style="color:white;">Address: NO.132/8A, Isurupura Road, Malabe.</h5>
    <a href="https://www.facebook.com/blossom/"> <img id="img1" src="../images/fab1.png"  width ="40px" ></a>
    <a href="https://www.instagram.com/blossom/"> <img id="img1" src="../images/insta.png" width ="40px"></a>
    <a href="https://www.twwiter.com/"><img id="img1" src="../images/tweet.png" width ="40px" ></a>
    <a href="https://www.whatsapp.com/blossom/"><img id="img1" src="../images/whatsapp.png" width ="40px"></a>
    </div>
    <!--//footer-->

</footer>
	
</body>
</html>
