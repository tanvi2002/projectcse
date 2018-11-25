<?php
$link = mysqli_connect("localhost","root","","order");

if (!($link)) {
	die("ERROR! Failed to connect to server".mysqli_connect_error());
}

//Unsafe Feature
//$first = $_POST['first_name'];
//$last = $_POST['last_name'];
//$mail = $_POST['email'];

//Increasing safety with escape sequences
$first = mysqli_real_escape_string($link,$_REQUEST['first_name']);
$last = mysqli_real_escape_string($link,$_REQUEST['last_name']);
$phone = mysqli_real_escape_string($link,$_REQUEST['phone']);
$order_item = mysqli_real_escape_string($link,$_REQUEST['order_item']);

$query = "INSERT into allorders(first,last,phone,orderitem) VALUES('$first','$last','$phone','$order_item')";

if(mysqli_query($link,$query)){
	header('location:index.php');
}
else{
	die("Failed to execute $query".mysqli_error($link));
}

mysqli_close($link);
?>