<?php include 'header.php';

if (isset($_POST['deletebtn'])) {

    include "config.php";
    $stu_id = $_POST['sid'];

    $sql = "DELETE FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if ($result) {

        header("Location:  http://localhost/crud/crud/index.php?message=success");
    } else {

        header("Location: http://localhost/crud//crud/index.php?message=failure");
    }


    mysqli_close($conn);
}
?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>