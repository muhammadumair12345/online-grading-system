<?php 
include '../db_connection/dbconnection.php';
$id=$_GET['id'];
$delete="DELETE FROM stored_items WHERE Item_Code=$id";
$conn->query($delete);
header('location:../../items_record.php');
 ?>