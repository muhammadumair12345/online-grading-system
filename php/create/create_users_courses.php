
<?php
include '../db_connection/dbconnection.php';
$sql = "CREATE TABLE users_courses(
	user_id int(4),
    course_id int(4),
    PRIMARY KEY(user_id,course_id),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE ON UPDATE CASCADE
)";
if ($conn->query($sql) === true) {
    echo "Successfully Created Users_Courses Table";
} else {
    echo "Not Successfully Created Users_Courses Table";
}
$conn->close();
?>
