<?php
require_once "../includes/dbconnect.php";
$msg = "";
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";
$query = "delete from myDB.comments where id=".$id;
if(mysqli_query($conn,$query)) {
header("Location: admin.php"); /* Redirect browser */
exit();
} else {
echo "unable to delete!";
}
?>
