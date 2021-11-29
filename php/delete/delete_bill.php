<?php 
include '../db_connection/dbconnection.php';
$id=$_GET['id'];
$delete="DELETE FROM bill WHERE Bill_No=$id";
$conn->query($delete);
header('location:../../bill_record.php');
?>