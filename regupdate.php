<?php
require('config.php');


$id=$_REQUEST['id'];
$query = "SELECT * from registration where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/otherstyle.css" >
</head>
<body>
<div class="form">
<p><a href="Registration.html">Registration Page</a> 
|<a href="regview.php">View Records</a>
<center>
<h1>Update Record</h1>
</center>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$first_name =$_REQUEST['first_name'];
$last_name =$_REQUEST['last_name'];
$gender =$_REQUEST['gender'];
$mobile_number =$_REQUEST['mobile_number'];
$email =$_REQUEST['email'];
$address =$_REQUEST['address'];
$pw =$_REQUEST['pw'];

$update="update registration set first_name='".$first_name."', last_name='".$last_name."', gender='".$gender."', mobile_number='".$mobile_number."', email='".$email."', address='".$address."', pw='".$pw."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Record Updated Successfully.";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>

<form name="form" method="post" action=""> 

<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

First Name:<br>
<p><input type="text" class = "inpt" name="first_name" placeholder="Enter first name" 
 value="<?php echo $row['first_name'];?>" /></p>
 
Last Name:<br>
<p><input type="text" class = "inpt" name="last_name" placeholder="Enter last name" 
 value="<?php echo $row['last_name'];?>" /></p>

Gender:<br>
<input type = "radio"  name = "gender" value="m" checked> Male
<input type = "radio"  name = "gender" value="f" checked> Female<br><br>

Mobile Number:<br>
<p><input type="text" class = "inpt" name="mobile_number" placeholder="Enter mobile number" 
 value="<?php echo $row['mobile_number'];?>" /></p>

Email:<br>
<p><input type="text" class = "inpt" name="email" placeholder="Enter email" 
 value="<?php echo $row['email'];?>" /></p>

Address:<br>
<p><input type="text" class = "inpt" name="address" placeholder="Enter address" 
value="<?php echo $row['address'];?>" /></p>

Password:<br>
<p><input type="text" class = "inpt" name="pw" placeholder="Enter pw" 
 value="<?php echo $row['pw'];?>" /></p>
<p><button class="bttn" name="submit" type="submit" value="Update">Update</button></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
