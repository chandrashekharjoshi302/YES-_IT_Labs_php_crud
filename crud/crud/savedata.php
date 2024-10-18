<?php

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost", "root", "abhii", "library-management-php", 3307) or die("Connection Failed");

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

if ($result) {

    header("Location:  http://localhost/crud/crud/index.php?message=success");
} else {

    header("Location: http://localhost/crud//crud/index.php?message=failure");
}

mysqli_close($conn);
