
<?php
require('config.php');
?>
<?php
 $first_name =$_POST["first_name"];
    $last_name = $_POST["last_name"];
    $gender = $_POST["gender"];
	$mobile_number =$_POST["mobile_number"];
    $email = $_POST["email"];
    $address = $_POST["address"];
	$pw = $_POST["pw"];


$sql = "insert into registration(id, first_name, last_name, gender, mobile_number, email, address, pw) VALUES('','$first_name','$last_name', '$gender', '$mobile_number', '$email', '$address', '$pw')";

if (mysqli_query($con, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);

?>