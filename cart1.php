<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cart | Life Style Store</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid" id="content">
<?php include 'includes/header.php'; ?>
<br>
<br>
<br>
<br>
<div class="row decor_bg">
<div class="col-md-6 col-md-offset-3">
<table class="table table-striped">



<?php
$sum = 0;
$user_id = $_SESSION['user_id'];
$query = "SELECT items.price AS Price, items.pid, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.pid WHERE users_items.user_id='$user_id' and status='Added to cart'";
$result = mysqli_query($con, $query)
or die(mysqli_error($con));
if (mysqli_num_rows($result) >= 1) {
?><thead>
<tr>
<th>Item Number</th>
<th>Item Name</th>
<th>Price</th>
<th></th>
</tr>
</thead>
<tbody>
<?php
while ($row = mysqli_fetch_array($result)) {
$sum+= $row["Price"];
$id = $row["pid"] . ", ";
echo "<tr><td>" . "#" . $row["pid"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link'> Remove</a></td></tr>";
}
$id = rtrim($id, ", ");
echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
?>
</tbody>
<?php
} else {
echo "Add items to the cart first!";
}
?>
<?php
?>
</table>
</div>
</div>
</div>
<?php include("includes/footer.php"); ?>
</body>

