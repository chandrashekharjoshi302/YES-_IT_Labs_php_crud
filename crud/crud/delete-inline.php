<?php

$stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

if ($result) {

    header("Location:  http://localhost/crud/crud/index.php?message=success");
} else {

    header("Location: http://localhost/crud//crud/index.php?message=failure");
}


mysqli_close($conn);
