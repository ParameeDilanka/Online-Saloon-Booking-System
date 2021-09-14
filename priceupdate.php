
<?php
require('config.php');

$id=$_REQUEST['id'];
$query = "SELECT * from price where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/otherstyle.css" />
</head>
<body>
<div class="form">
<p><a href="price.html">Price Page</a> 
| <a href="priceview.php">view record</a>
|<a href="addprice.html">Add price</a></p>
<center>
<h1>Update Record</h1>
</center>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$hair_price =$_REQUEST['hair_price'];
$bridal_price =$_REQUEST['bridal_price'];
$other_price =$_REQUEST['other_price'];

$update="update price set hair_price='".$hair_price."', bridal_price='".$bridal_price."', other_price='".$other_price."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Record Updated Successfully.";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" class = "inpt" name="hair_price" placeholder="Enter hair_price" 
value="<?php echo $row['hair_price'];?>" /></p>
<p><input type="text" class = "inpt" name="bridal_price" placeholder="Enter other_price" 
value="<?php echo $row['bridal_price'];?>" /></p>
<p><input type="text" class = "inpt" name="other_price" placeholder="Enter hair_price" 
 value="<?php echo $row['other_price'];?>" /></p>
<p><input class="bttn" name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>