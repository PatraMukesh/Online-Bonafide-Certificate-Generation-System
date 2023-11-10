<?php
$conn=mysqli_connect("localhost","root","","bonafide_db");
$id=$_GET['user_id'];
$action=$_GET['action'];
$cmd="UPDATE student SET action=$action where user_id=$id";
mysqli_query($conn,$cmd);
header('location: Admin_dashboard.php');
?>