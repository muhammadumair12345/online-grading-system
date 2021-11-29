
<?php
include '../db_connection/dbconnection.php';
$id = $_REQUEST['id'];
$user = "SELECT * FROM users WHERE id= '" . $id . "' ";
$result = $conn->query($user);
$row = $result->fetch_assoc();
echo json_encode($row);
$conn->close();
?>