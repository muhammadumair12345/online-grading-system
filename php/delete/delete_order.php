<?php 
include '../db_connection/dbconnection.php';
$id=$_GET['id'];
$delete="DELETE FROM customer_order WHERE Order_No=$id";
$conn->query($delete);
header('location:../../order_record.php');
?>