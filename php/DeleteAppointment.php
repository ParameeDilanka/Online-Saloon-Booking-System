<?php
	include_once 'config.php';
?>

<?php
	
	$sql = "DELETE FROM appointment WHERE app_id =6";

	if (mysqli_query($con, $sql)) 
	{
		echo "Record deleted successfully";
	} 
	else 
	{
	echo "Error deleting record: " . mysqli_error($conn);
	}
?>