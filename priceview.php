<?php
require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/otherstyle.css" />
</head>
<body>
<div class="form">
<p><a href="price.html">Price Page</a> 
|<a href="addprice.html">Add Price</a></p>
<center>
<h2>View Records</h2>
</center>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>No</strong></th>
<th><strong>hair_price</strong></th>
<th><strong>bridal_price</strong></th>
<th><strong>other_price</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from price";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["hair_price"]; ?></td>
<td align="center"><?php echo $row["bridal_price"]; ?></td>
<td align="center"><?php echo $row["other_price"]; ?></td>
<td align="center">
<a href="priceupdate.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="pricedelete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>