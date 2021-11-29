<?php 
include '../db_connection/dbconnection.php';
$order_no=$_GET['id'];
$i_code=$_GET['i_code'];

$delete="DELETE FROM selected_items WHERE Order_No=$order_no AND Item_Code=$i_code";
$conn->query($delete);
header('location:../../selected_items_record.php');
?>