<?php
	include_once 'config.php';
?>
<?php
	if(isset($_POST["contact"]))
	{
		$name=$_POST['CntName'];
		$email=$_POST['CntEmail'];
		$phone=$_POST['CntPhone'];
		$msg=$_POST['mssg'];
		
		
		//INSERT
		$sql = "INSERT INTO contact(Cnt_id, Cnt_name, Cnt_email,Cnt_phone,Msg)VALUES('', '$name', '$email','$phone','$msg')";
		
		if( mysqli_query($con,$sql))
		{
			echo"<script>
				alert('Message sent successfully.')
			</script>";
			header ("Location:../html/Contact.html");
		}
		else
		{
			echo"<script >
				alert('Message sent fail. Please try again.')
			</script>";
		}
		
	}

	mysqli_close($con);
?>