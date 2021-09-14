<?php
	include_once 'config.php';
?>


<!DOCTYPE html>

<head>
	<title>Contact List</title>
	
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<script src = "../javascript/frmScript.js"></script>
	<style>
		body {
		  background-color: black;
		}
	</style>
</head>
<body>

<h2 style="color:white;"><center>Contact Details</center></h2><br>
<table border="1" bgcolor="#FFD0FF" align="center"width="70%">
	<tr>
		<th>Cnt_id</th>
		<th>Cnt_name</th>
		<th>Cnt_email</th>
		<th>Cnt_phone</th>
		<th>message</th>
	</tr>

<?php
	$sql= "SELECT * FROM Contact";
	$result = $con->query($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo"<tr><td>".$row["Cnt_id"]."</td><td>".$row["Cnt_name"]."</td><td>".$row["Cnt_email"]."</td><td>".$row["Cnt_phone"]."</td><td>".$row["Msg"]."</td></tr>";
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
