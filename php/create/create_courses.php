
<?php
include '../db_connection/dbconnection.php';
$sql = "CREATE TABLE courses(
    id int(4) PRIMARY KEY,
    name varchar(40) NOT NULL
)";
if ($conn->query($sql) === true) {
    echo "Successfully Created Courses Table";
} else {
    echo "Not Successfully Created Courses Table";
}
$conn->close();
?>
