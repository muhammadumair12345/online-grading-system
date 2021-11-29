<?php 
include '../db_connection/dbconnection.php';
$id=$_GET['id'];
$delete="DELETE FROM registered_customer WHERE R_Customer_ID=$id";
$conn->query($delete);
header('location:../../customer_record.php');
 ?>