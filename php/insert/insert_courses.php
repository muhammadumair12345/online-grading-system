
<?php
include '../db_connection/dbconnection.php';

$sql = "INSERT INTO courses(id,name) values(1001,'Database'),	
(1002,'Sofware Engineering'),
(1003,'Visual Programming'),
(1004,'Assembly Language'),
(1005,'Linear Algebra'),
(1006,'Data Structure'),
(1007,'Calculus')";

if ($conn->query($sql) === true) {
    echo "Successfully Inserted Data to Courses Table";
} else {
    echo "Not Successfully Inserted Data to Courses Table";
}
$conn->close();

?>