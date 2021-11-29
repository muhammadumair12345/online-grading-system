
<?php
include '../db_connection/dbconnection.php';

$sql = "INSERT INTO users(id,type) values(20193212,'student'),	
(20217654,'student'),
(20195632,'student'),	
(20219867,'student'),
(20196632,'student'),	
(20218756,'student'),
(20226452,'student'),
(20213212,'student'),	
(20221876,'student'),
(20213387,'student'),	
(20224532,'student'),
(912,'professor'),	
(654,'professor'),
(632,'professor'),	
(867,'professor'),
(637,'professor'),	
(756,'professor'),
(452,'professor'),
(212,'professor'),	
(876,'professor'),
(387,'professor'),	
(532,'professor')";

if ($conn->query($sql) === true) {
    echo "Successfully Inserted Data to Users Table";
} else {
    echo "Not Successfully Inserted Data to Users Table";
}
$conn->close();

?>