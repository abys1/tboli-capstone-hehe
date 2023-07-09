<?php 
include 'dbcon.php';

$lesson = $_GET['lesson'];
$updatestatus = "UPDATE tbl_lesson_files SET status = 1 WHERE lesson = '$lesson'";
mysqli_query($conn, $updatestatus);
header("Location: admin_pending_lessons.php?msg=Updated Successfully");
exit();
?>