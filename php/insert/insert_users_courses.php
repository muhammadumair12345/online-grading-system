
<?php
include '../db_connection/dbconnection.php';

$sql = "INSERT INTO users_courses(user_id,course_id) values(20193212,1001),	
(20217654,1002),
(20195632,1003),	
(20219867,1004),
(20196632,1005),	
(20218756,1006),
(20226452,1007),
(912,1001),	
(654,1002),
(632,1003),	
(867,1004)";

if ($conn->query($sql) === true) {
    echo "Successfully Inserted Data to Users_Courses Table";
} else {
    echo "Not Successfully Inserted Data to Users_Courses Table";
}
$conn->close();

?>