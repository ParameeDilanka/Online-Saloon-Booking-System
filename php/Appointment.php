<?php
	include_once 'config.php';
?>
<?php
	if(isset($_POST["apomnt"]))
	{
		$name=$_POST['CusName'];
		$email=$_POST['CusEmail'];
		$appdate=$_POST['date'];
		$apptime=$_POST['time'];
		$no_of_pepl=$_POST['select'];
		
		//INSERT
		$sql = "INSERT INTO appointment (app_id, Cus_Name, Cus_Email,App_Date,App_Time,No_Of_People)VALUES ('', '$name', '$email','$appdate','$apptime','$no_of_pepl')";
		if( mysqli_query($con,$sql))
		{
			echo"<script>
				alert('Appointment made successfully.')
				</script>";
		}
		else
		{
			echo"<script >
				alert('Appointment booking fail. Please try again.')
			</script>";
		}
		
	}
?>	
<?php
	//UPDATE
	$upp = "UPDATE appointment SET App_Date='2020/10/30' WHERE app_id=5";

	if (mysqli_query($con, $upp)) {
		echo "Record updated successfully";
	} 
	else {
		echo "Error updating record: " . mysqli_error($conn);
	}
		
	mysqli_close($con);
?>