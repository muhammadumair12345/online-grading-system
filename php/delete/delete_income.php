<?php 
include '../db_connection/dbconnection.php';
$id=$_GET['id'];
$delete="DELETE FROM income WHERE Income_No=$id";
$conn->query($delete);
header('location:../../income_record.php');
?>