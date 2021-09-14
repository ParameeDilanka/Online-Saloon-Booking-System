
<?php
require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" type="text/css" href="css/otherstyle.css" />
</head>
<body>
<div class="form">
<p><a href="Registration.html">Registration page</a></p>
<center>
<h2>View Records</h2>
</center>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>No</strong></th>
<th><strong>first_name</strong></th>
<th><strong>last_name</strong></th>
<th><strong>gender</strong></th>
<th><strong>mobile_number</strong></th>
<th><strong>email</strong></th>
<th><strong>address</strong></th>
<th><strong>pw</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from registration";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["gender"]; ?></td>
<td align="center"><?php echo $row["mobile_number"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["pw"]; ?></td>
<td align="center">
<a href="regupdate.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="regdelete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>