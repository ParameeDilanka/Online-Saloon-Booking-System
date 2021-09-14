
<?php
require('config.php');
?>
<?php
$hair_price =$_POST["hair_price"];
$bridal_price =$_POST["bridal_price"];
$other_price =$_POST["other_price"];

$sql = "insert into price(id, hair_price, bridal_price, other_price) VALUES('', '$hair_price', '$bridal_price', '$other_price')";

if (mysqli_query($con, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);

?>