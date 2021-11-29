
<?php
include '../db_connection/dbconnection.php';
$sql = "CREATE TABLE users(
    id int(4) PRIMARY KEY,
   	type varchar(20) NOT NULL
)";
if ($conn->query($sql) === true) {
    echo "Successfully Created Users Table";
} else {
    echo "Not Successfully Created Users Table";
}
$conn->close();
?>
