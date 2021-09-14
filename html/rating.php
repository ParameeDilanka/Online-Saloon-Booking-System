<?php

require('config.php');

?>

<?php

$rate = $_POST["rate"];
$descrip = $_POST["comment"];

$sql = "insert into rating(id,rate,descrip) values ('','$rate','$descrip')";

if (mysqli_query($conn, $sql)){

	echo"<script>('record inserted succesfully')</script>";
	header("Location:rating.html");
}

else{
	echo"<script>('error insered records')</script>";
}

mysqli_close($conn);

?>