<?php

require('config.php');

?>

<?php

$username = $_POST["uName"];
$password = $_POST["showPass"];

$sql = "insert into login(ID,User,Pass) values ('','$username','$password')";

if (mysqli_query($conn, $sql)){

	echo"<script>('record inserted succesfully')</script>";
	header("Location:login.html");
}

else{
	echo"<script>('error insered records')</script>";
}

mysqli_close($conn);

?>